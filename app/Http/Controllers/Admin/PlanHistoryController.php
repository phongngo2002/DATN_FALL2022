<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlanHistory;
use Illuminate\Http\Request;

class PlanHistoryController extends Controller
{
    public function __construct()
    {
        $this->v = [];
    }

    public function list(Request $request)
    {
        $planHistory = new PlanHistory();
        $this->v['extParams'] = $request->all();
        $this->v['plansHistory'] = $planHistory->LoadPlansHistoryWithPage($this->v['extParams']);

        return view("admin.plan-history.list", $this->v);
    }
}
