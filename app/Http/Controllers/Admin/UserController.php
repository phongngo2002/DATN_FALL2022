<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            $params= array_map(function($item){
                if($item==''){
                    $item = null;
                }
                if(is_string($item)){
                    $item = trim($item);
                }
                return $item;
            },$request->post());
            unset($params['_token']);
            //xử lý ảnh
            if($request->hasFile('avatar') && $request->file('avatar')->isValid()){
                $params['image'] = $this->uploadFile($request->file('avatar'));
            }
            $user = new User();
            $request = $user->saveNew($params);
            if($request == null){
                redirect()->route($method_route);
            }else if($request > 0){
                Session::flash('success','Thêm mới thành công');
            }else{
                Session::flash('error','Thêm mới thất bại');
                redirect()->route($method_route);
            }
        }
        return view('admin.user.add',$this->v);
    }
    public function uploadFile($file){
        $fileName = time().'_'.$file->getClientOriginalName();//getClientOriginalName: trả về tên tệp gốc
        return $file->storeAs('avatar',$fileName,'public');
    }
}
