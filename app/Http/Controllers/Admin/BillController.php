<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\bill_pay_bank;
use App\Mail\ConfirmpayBill;
use App\Models\Area;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use function React\Promise\all;

class BillController extends Controller
{
    //
    public $v;

    public function __construct()
    {
        $this->v = [];
        $arr = [
            'function' => [
                'bills_index',
                'confirm',
            ]
        ];
        foreach ($arr['function'] as $item) {
            $this->middleware('check_permission:' . $item)->only($item);
        }
    }

    public function bills_index(Request $request)
    {
        $model = new Bill();

        $area = new Area();
        $this->v['areas'] = $area->admin_get_list_area();
        $this->v['list'] = $model->admin_get_list_bill($request->all());
        $this->v['params'] = $request->all();
        if (!empty($this->v['params'])) {
            if (isset($this->v['params']['area_id']) && $this->v['params']['area_id']) {
                $this->v['motels'] = DB::table('motels')
                    ->select('id', 'room_number')
                    ->where('area_id', $this->v['params']['area_id'])
                    ->get();
            }
        }
        return view('admin.bill.index', $this->v);
    }

    public function confirm(Request $request)
    {
        $res = Bill::find($request->bill_id);
        $res->status = 1;

        $res->save();

        $user = DB::table('motels')
            ->select(['email'])
            ->join('user_motel', 'motels.id', '=', 'user_motel.motel_id')
            ->join('users', 'user_motel.user_id', '=', 'users.id')
            ->where('motels.id', $res->motel_id)
            ->where('users.status', 1)
            ->get();
        $data = [];
        foreach ($user as $u) {
            $data[] = $u->email;
        }

        Mail::to($data)->send(new ConfirmpayBill());

        return redirect()->back()->with('success', 'Xác nhận tiền phòng thành công');
    }


    public function get_motel_by_area(Request $request)
    {
        $motel = DB::table('motels')->select('id', 'room_number')->where('area_id', $request->area_id)->get();

        return response()->json($motel);
    }
}
