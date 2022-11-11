<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function index()
    {


        if (isset($_GET['id'])) {
            $user = User::where('id', $_GET['id'])->first();
            Auth::login($user);
        }
        $this->v['plan'] = DB::table('plans')
            ->selectRaw('SUM(price * day) as sum')
            ->join('plan_history', 'plans.id', '=', 'plan_history.plan_id')
            ->where('plan_history.status', '!=', 1)
            ->where('plan_history.status', '!=', 0)
            ->where('plan_history.status', '!=', 4)
            ->groupBy(['plans.id'])
            ->first()
            ->sum;
        $this->v['plan'] += DB::table('recharges')->selectRaw('SUM((value - fee)*24.855) as sum')
            ->first()
            ->sum;

        $this->v['motel'] = DB::table('motels')->count();
        return view('admin.dashboard.index', $this->v);
    }

    public function profile()
    {
        return view('admin.user.profile', $this->v);
    }
}
