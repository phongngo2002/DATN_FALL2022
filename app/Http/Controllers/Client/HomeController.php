<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Motel;

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
        $modelArea = new Area();
        $modelMotel = new Motel();
        $area = $modelArea->client_Get_List_Top_Area();
        $motel = $modelMotel->client_get_List_Motel_top();
        $contact = $modelMotel->client_get_List_Motel_contact();

        return view('client.home.index', ['area' => $area,
            'motel' => $motel,
            'contact' => $contact
        ]);
    }

    public function motels()
    {
        $modelMotel = new Motel();
        $motel = $modelMotel->client_Get_all_Motel();

        return view('client.home.motels', [
            'motel' => $motel
        ]);
    }


}
