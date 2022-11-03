<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Mail\ForgotOtp;
use App\Models\PlanHistory;
use App\Models\Recharge;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AccountManagementController extends Controller
{
    //
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function getRecharge()
    {
        return view('client.account_management.recharge', $this->v);
    }

    public function historyRecharge(Request $request)
    {
        $model = new Recharge();
        $this->v['recharges'] = $model->admin_get_list_recharges($request->all());
        return view('client.account_management.history_recharge', $this->v);
    }

    public function historyBuyPlan(Request $request)
    {
        $planHistory = new PlanHistory();
        $this->v['params'] = $request->all();
        $this->v['plansHistory'] = $planHistory->LoadPlansHistoryWithPage($this->v['params']);
        return view('client.account_management.history_buy_plan', $this->v);
    }

    public function outMotel($motelId)
    {
        $userMotel = DB::table('user_motel')
            ->where('motel_id', $motelId)
            ->where('user_id', Auth::id())
            ->where('status', 1)
            ->update(['status' => 2]);
//        Mail::to(Auth::user()->email)->send(new ForgotOtp(Auth::user()->name) . ' đã gửi yêu cầu rời trọ');
        return redirect()->back()->with('success', 'Gửi yêu cầu rời trọ thành công');
    }

    public function profile()
    {
        $this->v['user'] = Auth::user();
        $this->v['currentMotel'] = DB::table('users')
            ->select(['email', 'users.name as userName', 'users.address as userAdd', 'phone_number', 'areas.name as area_name', 'room_number', 'user_motel.start_time as tg'])
            ->join('user_motel', 'users.id', '=', 'user_motel.user_id')
            ->join('motels', 'user_motel.motel_id', '=', 'motels.id')
            ->join('areas', 'motels.area_id', '=', 'areas.id')
            ->where('user_motel.user_id', Auth::id())
            ->where('user_motel.status', 1)
            ->get();
        return view('client.account_management.profile', $this->v);
    }

    public function editProfile(Request $request)
    {
        $user = DB::table('users')
            ->where('id', Auth::id())
            ->update([
                'name' => $request->name,
                'address' => $request->address,
                'phone_number' => $request->phone_number
            ]);

        return redirect()->back()->with('success', 'true');
    }
}
