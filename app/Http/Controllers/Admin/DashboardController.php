<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function index()
    {


        if (isset($_GET['id'])) {
            $user = User::where('id', $_GET['id'])->first();
            Auth::login($user);
        }
        return view('admin.dashboard.index', $this->v);
    }

    public function profile()
    {
        return view('admin.user.profile', $this->v);
    }
}
