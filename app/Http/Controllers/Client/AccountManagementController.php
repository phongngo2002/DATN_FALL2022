<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
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
}
