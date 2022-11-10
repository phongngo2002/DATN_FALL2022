<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Deposit;
use App\Models\Motel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DepositController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function deposit($id){
        $motel = new Motel();
        if ($motel->detailMotel1($id)) {
            $this->v['motel'] = $motel->detailMotel1($id);
            // dd($this->v['motel']);
            return view('client.deposit.deposit',$this->v);
        }
    }
    public function post_deposit(Request $request){
        $params = array_map(function($item){
            if($item == ""){
                $item = null;
            }
            if(is_string($item)){
                $item = trim($item);
            }
            return $item;
        },$request->all());
        unset($params['_token']);
        $params['user_id'] = Auth::user()->id;
        $params['status'] = 1;
        $params['type'] = 1;
        $area = Area::find($params['area_id']);
        $bossMotel = User::find($area->user_id);
        unset($params['area_id']);
        $depositModel = new Deposit();
        $dataPost = $depositModel->saveNew($params);
         
        if(gettype( $dataPost) == 'integer'){
            DB::beginTransaction();
            try {
                User::findOrFail($bossMotel->id)->update(['money' => $bossMotel->money + $params['value']]);
                User::findOrFail(Auth::user()->id)->update(['money' => Auth::user()->money - $params['value']]);
                
                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
                throw new Exception($e->getMessage());
                return redirect()->back()->with('error', 'Đặt cọc thất bại, thử lại sau');
            }
            return redirect()->back()->with('success', 'Đặt cọc thành công, thông tin của bạn đã được lưu lại');
        }
        else{
            return redirect()->back()->with('error', 'Đặt cọc thất bại, thử lại sau');
        }
    }
}
