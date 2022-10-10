<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function getLogin()
    {
        return view('auth.login', $this->v);
    }

    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->role_id !== 2) {
                return redirect()->route('backend_get_dashboard')->with('login_success', 'Đăng nhập thành công');
            }
        } else {
            return redirect()->back()->with('failed', 'abc');
        }
    }

    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
            return redirect()->route('get_login')->with('logout', 'abc');
        } else {
            abort(404);
        }
    }
}
