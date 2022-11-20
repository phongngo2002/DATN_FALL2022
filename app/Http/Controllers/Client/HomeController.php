<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Category;
use App\Models\Motel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function search(Request $request)
    {
        $params = array_map(function ($item) {
            if ($item == "") {
                $item = null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }
            return $item;
        }, $request->all());
        // dd($params);
        if ($params['area_min']) {
            $params['area_min'] = 0;
        }
        if ($params['price_min']) {
            $params['price_min'] = 0;
        }
        if (!array_key_exists('service', $params)) {
            $params['service'] = [];
        }
        foreach ($params['service'] as $key => $value) {
            if ($value == 'on') {
                array_push($params['service'], $key);
                unset($params['service'][$key]);
            }
        }
        $modelMotel = new Motel();
        $motels = $modelMotel->search($params);

//        $result = [];
//        foreach ($motels as $item) {
//            $result[] = $item;
//        }
        // dd(json_encode(['motels'=>$result]));
        return response()->json($motels);

    }

    public function motel_by_area($areaID)
    {
        $model = new Area();

        $this->v['motels'] = $model->client_get_list_motel($areaID);
        $this->v['area_id'] = $areaID;
        return view('client.area.list', $this->v);
    }

    public function filter_motel_by_area(Request $request)
    {
        $query = DB::table('users')
            ->select(['users.name',
                'motel_id',
                'electric_money',
                'warter_money',
                'motels.price',
                'area',
                'avatar',
                'plan_history.created_at',
                'room_number',
                'areas.address',
                'link_gg_map',
                'services',
                'photo_gallery',
                'areas.name as area_name'])
            ->join('areas', 'users.id', '=', 'areas.user_id')
            ->join('motels', 'areas.id', '=', 'motels.area_id')
            ->join('plan_history', 'motels.id', '=', 'plan_history.motel_id')
            ->join('plans', 'plan_history.plan_id', '=', 'plans.id')
            ->where('plan_history.status', 1)
            ->where('type', $request->type)
            ->where('motels.status', '=', 5)
            ->where('area_id', $request->area_id);
        if ($request->room_number) {
            $query = $query->where('room_number', $request->room_number);
        }
        $data = $query->orderBy('motels.price', $request->order_by_price)
            ->orderBy('priority_level')->get();
        $result = [];
        foreach ($data as $item) {
            $check = false;
            if (isset($request->service) &&  count($request->service) > 0) {
                foreach (json_decode($item->services)->service_checkbox as $a) {
                    if (in_array($a, $request->service)) {
                        $check = true;
                    } else {
                        $check = false;
                        break;
                    }

                }
                if (!$check) {
                    $item->created_at = Carbon::parse($item->created_at)->format('h:i A d/m/Y');
                    $result[] = $item;
                }
            } else {
                $item->created_at = Carbon::parse($item->created_at)->format('h:i A d/m/Y');
                $result[] = $item;
            }


        }
        return response()->json($result);

    }
}
