<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $v;
    
    public function __construct()
    {
        $this->v = [];
    }
    public function getAll() {
        $this->v['title'] = "List user";
        $objUser = new User();
        $this->v['users'] = $objUser->getAll();
        return view('admin.user.index',$this->v);
    }
    public function getUser(UserRequest $request){
        // dd($request->id);
        $this->v['title'] = "Detail user";
        // if($request->id == )
        $objUser = new User();
        $user = $objUser->getOne($request->id);
        if($user ==  null){
            $this->v['error'] = 'Không tìm thấy user này!';
        }else{
            $this->v['user'] = $user;
        }
        return view('admin.user.detail',$this->v);
    }
    public function add(UserRequest $request) {
        $this->v['title'] = "Add user";
        $method_route = 'route_backend_user_add';
        if ($request->isMethod('post')) {
            // dd($request->post());
            $params['cols'] = array_map(function($item){
                if($item==''){
                    $item = null;
                }
                if(is_string($item)){
                    $item = trim($item);
                }
                return $item;
            },$request->post());
            unset($params['cols']['_token']);
            // dd($params['cols']);
        }
        $user = new User();
        

        return view('admin.user.add',$this->v);
    }
}
