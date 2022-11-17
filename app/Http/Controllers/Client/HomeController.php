<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
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
        $category = new Category();
        $categories = $category->getAll();
        $area = $modelArea->client_Get_List_Top_Area();
        // $motel = $modelMotel->client_get_List_Motel_top();
        // $contact = $modelMotel->client_get_List_Motel_contact();
        $motel = $modelMotel->client_get_List_Motel_top($request->all());
        $contact = $modelMotel->client_get_List_Motel_contact($request->all());

        return view('client.home.index', [
            'area' => $area,
            'motel' => $motel,
            'contact' => $contact,
            'categories' => $categories
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
    public function search(Request $request){
        $params = array_map(function($item){
            if ($item == ""){
                $item = null;
            }
            if (is_string($item)){
                $item = trim($item);
            }
            return $item;
        },$request->all());
        // dd($params);
        if($params['area_min'] === null){
            $params['area_min'] = 0;
        }
        if($params['price_min'] === null){
            $params['price_min'] = 0;
        }
        if(array_key_exists('service',$params) == false){
            $params['service'] = [];
        }
        foreach ($params['service'] as $key => $value) {
            if($value == 'on'){
                array_push($params['service'],$key);
                unset($params['service'][$key]);
            }
        }
        $modelMotel = new Motel();
        $motels = $modelMotel->search($params);
        $result = [];
        foreach ($motels as $item) {
            $result[] = $item;
        }
        // dd(json_encode(['motels'=>$result]));
        return response()->json(['motels'=>$result]);
    
    }


}
