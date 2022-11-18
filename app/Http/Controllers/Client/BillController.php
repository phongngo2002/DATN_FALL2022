<?php

namespace App\Http\Controllers\Client;

use Exception;
use App\Models\Area;
use App\Models\Bill;
use App\Models\User;
use App\Models\Motel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function index()
    {
        $model = new Bill();
        $this->v['list'] = $model->client_get_list_bill_user();
        return view('client.bill.index', $this->v);
    }

    public function get_pay_bill($id)
    {
        $bill = new Bill();
        try {
            $this->v['item'] = $bill->client_get_bill_user($id);

            return view('client.bill.pay_bill', $this->v);


            // $this->v['list'] = $bill->client_get_list_bill_user();
            // return view('client.bill.index', $this->v);
        } catch (Exception $e) {
            return view('errors.404');
        }
    }

    public function pay_bill_coin(Request $request, $id)
    {
        $params = array_map(function ($item) {
            if ($item == "") {
                $item = null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }
            return $item;
        }, $request->all());

        unset($params['_token'], $params['tong']);

        $model = new Bill();
        $bill = $model->client_get_bill_user($id);
        $area = Area::find($bill->area_id);
        $boss = User::find($area->id);

        // $params['user_id'] = Auth::user()->id;

        if (gettype($bill) == 'object') {
            if ($bill->status != 2) {
                DB::beginTransaction();
                try {
                    User::findOrFail($boss->id)->update(['money' => $boss->money + $params['coin']]);
                    User::findOrFail(Auth::user()->id)->update(['money' => Auth::user()->money - $params['coin']]);
                    $model->find($id)->update(['status' => 2]);
                    DB::commit();
                } catch (Exception $e) {
                    DB::rollBack();
                    throw new Exception($e->getMessage());
                    return redirect()->back()->with('error', 'Đặt cọc thất bại, thử lại sau');
                }
                return redirect()->route('client_get_pay_bill', $id)->with('success', 'than toán');
            } else {
                return redirect()->route('client_get_pay_bill', $id)->with('error', 'than toán');
                // Mail::to($bossMotel->email)->send(new MailDeposit($dataMail));
                // return redirect()->route('client.motel.detail', ['id' => $params['motel_id']])->with('success', 'Thông tin đặt cọc của bạn đã được lưu vào hệ thống và được thông báo đến chủ trọ');
            }
        } else {
            return redirect()->route('client_get_pay_bill', $id)->with('error', 'than toán');
            // return redirect()->back()->with('error', 'Đặt cọc thất bại, thử lại sau');
        }
    }
}