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
}
