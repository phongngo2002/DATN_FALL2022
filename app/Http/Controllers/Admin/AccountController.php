<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AccountRequest;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    private $v;
    
    public function __construct()
    {
        $this->v = [];
    }
    public function getAll(AccountRequest $request) {
        $this->v['title'] = "List account";
        return view('admin.account.index',$this->v);
    }
    public function add(AccountRequest $request) {
        $this->v['title'] = "Add account";
        $method_route = 'route_backend_account_add';
        return view('admin.account.form',$this->v);
    }

}
