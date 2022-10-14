<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

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
        $this->v['areas'] = $areas->admin_get_list_area($request->all());
        $this->v['params'] = $request->all() ?? [];
        return view('admin.area.index', $this->v);
    }
}
