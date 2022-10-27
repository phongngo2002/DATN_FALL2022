<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function index_register()
    {
        return view('auth.register');
    }

    public function register_user(Request $request)
    {
        $users = new User();
        $users->fill($request->all());
        $users->password = Hash::make($request->password);
        $users->role_id = 1;
        $users->save();

        return redirect()->route('get_register')->with('success_register', "Insert successfully");
    }
}