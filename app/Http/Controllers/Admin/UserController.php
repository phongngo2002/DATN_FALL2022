<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $v;
    
    public function __construct()
    {
        $this->v = [];
    }
    public function getAll(UserRequest $request) {
        $this->v['title'] = "List account";
        return view('admin.account.index',$this->v);
    }
    public function add(UserRequest $request) {
        $this->v['title'] = "Add account";
        $method_route = 'route_backend_account_add';
        return view('admin.account.form',$this->v);
    }
}
