<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Motel;
use Illuminate\Http\Request;

class LiveTogetherController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function detail($id)
    {
        $infoMotel = new Motel();
        $this->v['motel'] = $infoMotel->infoMotelLiveTogether($id);

        // dd($this->v['motel']);
        return view('client.live-together.detail', $this->v);
    }
}
