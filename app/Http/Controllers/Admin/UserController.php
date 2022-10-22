<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class UserController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function getAll(UserRequest $request)
    {
        $this->v['title'] = "List user";
        $objUser = new User();
        $this->v['users'] = $objUser->getAll($request->all());
        $this->v['params'] = $request->all() ?? [];
        return view('admin.user.index', $this->v);
    }

    public function getUser($id, $used_to)
    {
        $objUser = new User();
        $user = $objUser->getOne($id);
        $this->v['user'] = $user;
        $this->v['role'] = DB::table('roles')->select(['id', 'name'])->where('status', 1)->get();
        if ($used_to == 'detail') {
            $this->v['title'] = "Chi tiết tài khoản";
            return view('admin.user.detail', $this->v);
        } else {
            $this->v['title'] = "Cập nhật tài khoản";
            return view('admin.user.form_update', $this->v);
        }
    }

    public function add(UserRequest $request)
    {
        $this->v['title'] = "Thêm mới tài khoản";
        $this->v['role'] = [
            '1' => "Admin",
            '2' => "Chủ trọ",
            '3' => "Thành viên",
        ];
        $method_route = 'backend_user_add';
        if ($request->isMethod('post')) {
            $params = array_map(function ($item) {
                if ($item == '') {
                    $item = null;
                }
                if (is_string($item)) {
                    $item = trim($item);
                }
                return $item;
            }, $request->post());
            unset($params['_token']);
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                $uploadedFileUrl = Cloudinary::upload($request->file('avatar')->getRealPath(), ['folder' => 'DATN_FALL2022'])->getSecurePath();
                $params['avatar'] = $uploadedFileUrl;
            }
            $user = new User();
            $request = $user->saveNew($params);
            if ($request == null) {
                redirect()->route($method_route);
            } else if ($request > 0) {
                Session::flash('success', 'Thêm mới thành công');
            } else {
                Session::flash('error', 'Thêm mới thất bại');
                redirect()->route($method_route);
            }
        }
        return view('admin.user.add', $this->v);
    }

    public function update(UserRequest $request, $id)
    {
        // dd($id);
        $params = [];
        $params = array_map(function ($item) {
            if ($item == '') {
                $item == null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }
            return $item;
        }, $request->post());
        $params['id'] = $id;
        if ($request->file('avatar') == null) {
            $params['avatar'] = $request->avatar_old;
        } else {
            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
                $uploadedFileUrl = Cloudinary::upload($request->file('avatar')->getRealPath(), ['folder' => 'DATN_FALL2022'])->getSecurePath();
                $params['avatar'] = $uploadedFileUrl;
            }
        }
        unset($params['_token']);
        unset($params['avatar_old']);
        $objUser = new User();
        // dd($params);
        $res = $objUser->saveUpdate($params);
        // dd(gettype($res) === 'integer');
        if ($res === null) {
            Session::flash('error', 'Không tìm thấy bản ghi cần cập nhật');
            return redirect()->route('backend_user_detail', ['id' => $id, 'used_to' => 'update']);
        } elseif (gettype($res) === 'integer') {
            Session::flash('success', 'Cập nhật bản ghi ' . $id . ' thành công');
            return redirect()->route('backend_user_getAll');
        } else {
            Session::flash('error', 'Lỗi cập nhật bản ghi ' . $id);
            return redirect()->route('backend_user_detail', ['id' => $id, 'used_to' => 'update']);
        }
    }
}
