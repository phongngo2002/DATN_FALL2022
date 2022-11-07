<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Plans;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    private $v;
    private $Plans;

    public function __construct()
    {
        $this->Plans = new Plans();
    }
    public function index_plan()
    {
        $data = $this->Plans->list();
        return view('client.home.Plans', [
            'plans' => $data
        ]);
    }
}