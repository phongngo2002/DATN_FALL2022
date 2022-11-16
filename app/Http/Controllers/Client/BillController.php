<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function index()
    {
        $model = new Bill();
        $this->v['list'] = $model->client_get_list_bill_user();
        return view('client.bill.index', $this->v);
    }
}
