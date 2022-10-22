<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;
use DataTables;
use Yajra\DataTables\Contracts\DataTable;

class DepositController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function index_deposits(Request $request)
    {
        $areas = new Deposit();
        $this->v['deposits'] = $areas->get_list_admin_deposit($request->all());
        $this->v['params'] = $request->all() ?? [];
        return view('admin.deposit.index', $this->v);
    }
}
