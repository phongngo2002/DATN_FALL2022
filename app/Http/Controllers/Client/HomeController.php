<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Motel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    private $v;

    public function __construct()
    {
        $this->v = [];
    }


    public function index(Request $request)
    {
        // dd($request->all());

        // Đăng nhập google
        if (isset($_GET['id'])) {
            $user = User::where('id', $_GET['id'])->first();
            Auth::login($user);
        }

        $modelArea = new Area();
        $modelMotel = new Motel();
        $area = $modelArea->client_Get_List_Top_Area();
        // $motel = $modelMotel->client_get_List_Motel_top();
        // $contact = $modelMotel->client_get_List_Motel_contact();
        $motel = $modelMotel->client_get_List_Motel_top($request->all());
        $contact = $modelMotel->client_get_List_Motel_contact($request->all());

        // dd($motel);
        return view('client.home.index', [
            'area' => $area,
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

    public function motel_by_area($areaID)
    {
        $model = new Area();

        $this->v['motels'] = $model->client_get_list_motel($areaID);
        return view('client.area.list', $this->v);
    }


}
