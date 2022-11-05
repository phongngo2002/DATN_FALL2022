<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use mysql_xdevapi\CollectionModify;
use PhpParser\Node\Expr\New_;
use Yajra\DataTables\Facades\DataTables;

class AreaController extends Controller
{

    private $v;

    public function __construct()
    {
        $this->v = [];
        $arr = [
            'function' => [
                'index_areas',
                'add_areas',
                'saveAdd_areas',
                'update_areas',
                'saveUpdate_areas',
                'delete_areas'
            ]
        ];
        foreach ($arr['function'] as $item) {
            $this->middleware('check_permission:' . $item)->only($item);
        }
    }

    public function index_areas(Request $request)
    {
        $areas = new Area();
        $this->v['params'] = $request->all() ?? [];

        $this->v['areas'] = $areas->admin_get_list_area($request->all());

        return view('admin.area.index', $this->v);
    }

    public function add_areas()
    {


        return view('admin.area.add', $this->v);
    }

    public function saveAdd_areas(Request $request)
    {

        $params = [];

        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item = null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }
            return $item;
        }, $request->all());

        if ($request->imgReal) {
            $params['cols']['img'] = cloudinary()->upload($request->imgReal, [
                'resource_type' => 'auto',
                'folder' => 'DATN_FALL2022'
            ])->getSecurePath();
        } else {
            $params['cols']['img'] = asset('assets/client/images/popular-places/5.jpg');
        }
        $model = new Area();

        $model->admin_create_area($params);

        return redirect()->route('backend_get_list_area')->with('success', 'Thêm mới khu trọ thành công');

    }

    public function update_areas($id)
    {
        $model = new Area();

        $this->v['area'] = $model->getArea($id);

        return view('admin.area.edit', $this->v);

    }

    public function saveUpdate_areas(Request $request, $id)
    {

        $params = [];

        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item = null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }
            return $item;
        }, $request->all());
        $params['cols']['id'] = $id;
        if (strpos($request->imgReal, 'https://res.cloudinary.com') === false) {
            $params['cols']['img'] = cloudinary()->upload($request->imgReal, [
                'resource_type' => 'auto',
                'folder' => 'DATN_FALL2022'
            ])->getSecurePath();
        } else {
            $params['cols']['img'] = $request->imgReal;
        }

        $model = new Area();
        $model->admin_update_area($params);

        return redirect()->route('backend_get_list_area')->with('success', 'Cập nhật khu trọ thành công');

    }

    public function delete_areas($id)
    {
        $model = new Area();

        $model->adminDeteletArea($id);

        return redirect()->route('backend_get_list_area');
    }
}
