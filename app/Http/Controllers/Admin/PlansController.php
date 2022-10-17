<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlansRequest;
use App\Models\Plan;
use App\Models\Plans;

class PlansController extends Controller

{
    public function index()
    {   //select data plans
        $plans = new Plans;
        return view('admin.plan.index', [
            // trả dữ liệu về trang danh sách
            'plans' => $plans->list()
        ]);
    }

    public function create()
    {
        return view('admin.plan.create');
    }

    public function store(PlansRequest $request)
    {
        $plans = new Plans;
        //Điền thông tin vào model với một mảng các thuộc tính.
        $plans->fill($request->all());
        // ép kiểu đúng với các trường trong table
        $plans->priority_level = (int)$request->priority_level;
        $plans->type = (int)$request->type;
        $plans->time = (int)$request->time;
        $plans->price = (float)$request->price;
        // lưu dữ liệu
        $plans->save();

        return redirect()->route('backend_admin_get_list_plans')->with('success', "Insert successfully");

    }


    public function edit($id)
    {
        $plans = new Plans;
        return view('admin.plan.edit', [
            'plan' => $plans->show_plans($id)
        ]);
    }

    public function update(PlansRequest $request, $id)
    {
        $plans = Plans::find($id);

        $plans->fill($request->all());
        // ép kiểu đúng với các trường trong table
        $plans->priority_level = (int)$request->priority_level;
        $plans->type = (int)$request->type;
        $plans->time = (int)$request->time;
        $plans->price = (float)$request->price;

        $plans->save();


        return redirect()->route('backend_admin_get_list_plans')->with('success', "Insert successfully");
    }

    public function destroy($id)
    {
        Plan::where('id', $id)->update(['status' => 0]);

        return redirect()->route('backend_admin_get_list_plans');

//        return response()->json([
//            'success' => 'User Deleted Successfully!'
//        ]);
    }
}
