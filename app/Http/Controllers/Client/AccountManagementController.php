<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\PlanHistory;
use App\Models\Recharge;
use Illuminate\Http\Request;

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
}
