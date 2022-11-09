<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Motel;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    private $v;
    public function __construct()
    {
        $this->v = [];
    }
    public function deposit($id){
        $motel = new Motel();
        if ($motel->detailMotel1($id)) {
            $this->v['motel'] = $motel->detailMotel1($id);
            // dd($this->v['motel']);
            return view('client.deposit.deposit',$this->v);
        }
    }
}
