<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motel;
use Illuminate\Http\Request;

class MotelController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function list($id, Request $request){
        $motel = new Motel();
        $this->v['extParams'] = $request->all();
        $this->v['motels'] = $motel->LoadMotelsWithPage($this->v['extParams'], $id);
        $this->v['idCate'] = $id;

        return view('admin.motels.list', $this->v);
    }

    public function detail($idMotel){
        $motel = new Motel();
        $this->v['motel'] = $motel->detailMotel($idMotel);
        $this->v['photo_gallery'] = $this->v['motel']->photo_gallery;

        return view('admin.motels.detail', $this->v);
    }
}
