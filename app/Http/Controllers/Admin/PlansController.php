<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlansRequest;
use App\Models\PlansModel;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {   //select data plans 
        $plans = PlansModel::select(
            'id',
            'name',
            'desc',
            'priority_level',
            'type',
            'time',
            'price',
            'created_at'
        )->orderBy('id', 'desc')->paginate(5);

        return view('admin.Plans.index', [
            // trả dữ liệu về trang danh sách 
            'plans' => $plans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Plans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlansRequest $request)
    {
        $plans = new PlansModel;
        //Điền thông tin vào model với một mảng các thuộc tính.
        $plans->fill($request->all());
        // ép kiểu đúng với các trường trong table 
        $plans->priority_level = (int) $request->priority_level;
        $plans->type = (int) $request->type;
        $plans->time = (int) $request->time;
        $plans->price = (float) $request->price;

        // lưu dữ liệu
        $plans->save();



        if ($this->create($request->all)) {
            return redirect()->route('admin.plans.create')->with('save_plans', 'thêm thành công');
        } else {
            return redirect()->route('admin.plans.create')->with('not_plans', 'thêm ko thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PlansModel::find($id)->delete();

        return response()->json([
            'success' => 'User Deleted Successfully!'
        ]);
    }
}