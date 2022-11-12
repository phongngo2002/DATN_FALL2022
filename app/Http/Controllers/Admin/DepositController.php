<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Contracts\DataTable;

class DepositController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
        $arr = [
            'function' => [
                'index_deposits',
            ]
        ];
        foreach ($arr['function'] as $item) {
            $this->middleware('check_permission:' . $item)->only($item);
        }
    }

    public function index_deposits(Request $request)
    {
        $areas = new Deposit();
        $this->v['deposits'] = $areas->get_list_admin_deposit($request->all());
        $this->v['params'] = $request->all() ?? [];
        return view('admin.deposit.index', $this->v);
    }

    public function listDeposit($id)
    {
        $this->v['deposits'] = DB::table('users')->select([
            'deposits.id as deID', 'users.name as userName', 'room_number', 'value',
            'deposits.created_at as date',
            'deposits.status as deStatus'
        ])
            ->join('deposits', 'users.id', '=', 'deposits.user_id')
            ->join('motels', 'deposits.motel_id', '=', 'motels.id')
            ->where('motels.id', $id)
            ->orderBy('deID', 'desc')->get();
        
            return view('admin.motel.list-deposit', $this->v);
    }
}
