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
        $this->v['AdminCountArea'] = DB::table('areas')->count() ?? 0;
        $this->v['AdminCountMotel'] = DB::table('motels')->count();
        $this->v['AdminCountMotelActive'] = DB::table('motels')->where('status', 2)->count() ?? 0;
        $this->v['AdminCountUser'] = DB::table('users')->whereNot('is_admin', 1)->count() ?? 0;
        $this->v['AdminCountPlan'] = DB::table('plans')->count() ?? 0;
        $this->v['AdminCountUserIsOwnMotel'] = DB::table('users')->where('role_id', 1)->where('is_admin', 0)->count() ?? 0;
        $this->v['AdminCountUserIsAdmin'] = DB::table('users')->where('is_admin', 1)->count() ?? 0;

        $this->v['OwnMotelCountUser'] = DB::table('users')
                ->join('user_motel', 'user_motel.motel_id', '=', 'users.id')
                ->join('motels', 'user_motel.motel_id', '=', 'motels.id')
                ->join('areas', 'motels.area_id', '=', 'areas.id')
                ->where('areas.user_id', Auth::user()->id)->count() ?? 0;
        $this->v['OwnMotelCountArea'] = DB::table('areas')->where('user_id', Auth::user()->id)->count() ?? 0;
        $this->v['OwnMotelCountMotel'] = DB::table('motels')
                ->join('areas', 'motels.area_id', '=', 'areas.id')
                ->where('areas.user_id', Auth::user()->id)->count() ?? 0;

        $this->v['OwnMoteCountPlanBuyed'] = DB::table('plan_history')->where('user_id', Auth::user()->id)->count() ?? 0;
        $this->v['OwnMoteCountPlanBuyedActive'] = DB::table('plan_history')
                ->where('user_id', Auth::user()->id)
                ->where('status', 1)->count() ?? 0;

        $this->v['OwnMotelCountBillSum'] = DB::table('bills')
                ->join('motels', 'bills.motel_id', '=', 'motels.id')
                ->join('areas', 'areas.id', '=', 'motels.area_id')
                ->where('areas.user_id', Auth::user()->id)
                ->count() ?? 0;
        // dd( $this->v['OwnMotelCountBillSum']);
        $this->v['OwnMotelCountNotBill'] = DB::table('bills')
                ->where('bills.status', 0)
                ->join('motels', 'bills.motel_id', '=', 'motels.id')
                ->join('areas', 'areas.id', '=', 'motels.area_id')
                ->where('areas.user_id', Auth::user()->id)
                ->count() ?? 0;
        $this->v['OwnMotelCountBilled'] = DB::table('bills')
                ->where('bills.status', 1)
                ->join('motels', 'bills.motel_id', '=', 'motels.id')
                ->join('areas', 'areas.id', '=', 'motels.area_id')
                ->where('areas.user_id', Auth::user()->id)
                ->count() ?? 0;

        if (isset($_GET['id'])) {
            $user = User::where('id', $_GET['id'])->first();
            Auth::login($user);
        }

        // $this->v['motel'] = DB::table('motels')->count();
        return view('admin.dashboard.index', $this->v);
    }

    public function profile()
    {
        return view('admin.user.profile', $this->v);
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(Auth::id());
        $user->script_fb = $request->script_fb;
        $user->save();

        return redirect()->back();
    }
}
