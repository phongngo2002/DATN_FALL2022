<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    private $v;

    public function __construct()
    {
        $this->v = [];
    }


    public function index()
    {
        return view('client.home.index', $this->v);
    }
}
