<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    //
    public $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $model = new Bill();
        $this->v['list'] = $model->admin_get_list_bill([]);
        // dd($this->v['list']);
        return view('admin.bill.index', $this->v);
    }

    public function confirm(Request $request)
    {
        $res = Bill::find($request->bill_id);

        $res->status = 1;

        $res->save();

        return redirect()->back()->with('success', 'Xác nhận tiền phòng thành công');
    }
}