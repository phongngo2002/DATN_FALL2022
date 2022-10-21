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
    //
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function index(Request $request)
    {
        $areas = new Area();
        if ($request->ajax()) {
            $data = $areas->admin_get_list_area($request->all());
            return DataTables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $string = "return confirm('Bạn có chăc muốn xóa khu trọ này')";
                    $btn = '
                    <a href = "' . route('admin.motel.list', ['id' => $row->id]) . '" class="btn btn-info" > Chi tiết </a >
                           <a href = "' . route('backend_get_edit_area', ['id' => $row->id]) . '" class="btn btn-warning" > Sửa</a >
                           <a href = "' . route('backend_delete_area', ['id' => $row->id]) . '"onclick = "' . $string . '" class="btn btn-danger" > Xóa</a
                    ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $this->v['params'] = $request->all() ?? [];
        return view('admin.area.index', $this->v);

//        $this->v['areas'] = $areas->admin_get_list_area($request->all());

//        return view('admin.area.index', $this->v);
    }

    public function create()
    {


        return view('admin.area.add', $this->v);
    }

    public function store(Request $request)
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

        $model = new Area();

        $model->admin_create_area($params);

        return redirect()->route('backend_get_list_area');

    }

    public function edit($id)
    {
        $model = new Area();

        $this->v['area'] = $model->getArea($id);

        return view('admin.area.edit', $this->v);

    }

    public function update(Request $request, $id)
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
        $model = new Area();
        $model->admin_update_area($params);

        return redirect()->route('backend_get_list_area');

    }

    public function delete($id)
    {
        $model = new Area();

        $model->adminDeteletArea($id);

        return redirect()->route('backend_get_list_area');
    }
}
