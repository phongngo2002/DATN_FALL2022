<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Motel;
use App\Models\Plan;
use App\Models\PlanHistory;
use App\Models\User;
use App\Models\UserMotel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\CollectionModify;
use Yajra\DataTables\Facades\DataTables;

class MotelController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function list($id, Request $request)
    {
        $motel = new Motel();
        $this->v['motels'] = $motel->LoadMotelsWithPage($request->all(),$id);
        $this->v['id'] = $id;
        return view('admin.motel.list', $this->v);
    }

    public function detail($idMotel)
    {
        $motel = new Motel();
        $this->v['motel'] = $motel->detailMotel($idMotel);
        $this->v['photo_gallery'] = $this->v['motel']->photo_gallery ?? [];

        return view('admin.motel.detail', $this->v);
    }


    public function create($id)
    {
        $this->v['area_id'] = $id;
        return view('admin.motel.add', $this->v);
    }

    public function store(Request $request, $id)
    {
        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item = null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }

            return $item;
        }, $request->all());

        unset($params['cols']['_token']);
        $params['cols']['service'] = json_encode([
            'bed' => $request->bed,
            'bedroom' => $request->bedroom,
            'toilet' => $request->toilet,
            'more' => $request->service_more,
            'actor' => $request->actor
        ]);
        $params['cols']['area_id'] = $request->id;
        $model = new Motel();

        $result = $model->createMotel($params['cols']);

        return redirect()->route('admin.motel.list', ['id' => $id]);
    }

    public function info_motel($id, $idMotel)
    {
        $model = new Motel();

        $this->v['info'] = $model->info_motel($idMotel);
        $ids = [];
        foreach ($this->v['info'] as $item) {
            $ids[] = $item->user_id;
        }
        $this->v['user'] = DB::table('users')->where('role_id', '3')->whereNotIn('id', $ids)->get();
        $this->v['data'] = json_encode($this->v['user']);
        $this->v['params'] = [
            'motel_id' => $idMotel,
            'area_id' => $id
        ];
        return view('admin.motel.info', $this->v);
    }

    public function add_people(Request $request, $id, $idMotel)
    {
        $model = new UserMotel();

        $model->add($idMotel, $request->user_id);

        return redirect()->route('admin.motel.info', ['id' => $id, 'idMotel' => $idMotel]);
    }

    public function create_post(Request $request, $id, $idMotel)
    {
        $this->v['params'] = [
            'motel_id' => $idMotel,
            'area_id' => $id
        ];

        $this->v['plans'] = Plan::select(['id', 'name', 'type', 'time', 'price', 'status'])->where('type', 1)->where('status', 1)->get();

        $data = [];

        foreach ($this->v['plans'] as $i) {
            $data[] = [
                'id' => $i->id,
                'title' => $i->name,
                'price' => $i->price,
                'time' => $i->time
            ];
        }
        $this->v['data'] = json_encode($data);
        $this->v['current_plan_motel'] = DB::table('plan_history')
            ->select(['name', 'day', 'price', 'plan_history.created_at as created_at_his', 'plan_id', 'plan_history.id as ID', 'priority_level'])
            ->join('plans', 'plan_history.plan_id', '=', 'plans.id')
            ->where('motel_id', $idMotel)
            ->where('plan_history.status', 1)
            ->first();
        $model = new Motel();
        $this->v['motel'] = $model->detailMotel($idMotel);
        return view('admin.motel.post', $this->v);
    }

    public function post_post(Request $request, $id, $idMotel)
    {
        $model = new PlanHistory();
        if ($request->gia_han) {
            $model->create([
                'plan_id' => $request->plan_id_o,
                'motel_id' => $idMotel,
                'day' => $request->post_day_more,
                'status' => 2,
                'parent_id' => $request->ID,
            ]);

            $planHistory = PlanHistory::find($request->ID);

            $planHistory->day += $request->post_day_more;

            $planHistory->save();

            $user = User::find(Auth::id());
            $user->money -= $request->post_money_more;

            $user->save();
            return redirect()->back()->with('success', 'Gia hạn bài đăng thành công');
        } else if ($request->change_plan) {
            $id = $model->create([
                'plan_id' => $request->post_plan_id,
                'motel_id' => $idMotel,
                'day' => $request->post_day,
                'status' => 1,
                'parent_id' => 0,
            ]);
            $model->create([
                'plan_id' => $request->post_plan_id,
                'motel_id' => $idMotel,
                'day' => $request->post_day,
                'status' => 2,
                'parent_id' => $id,
            ]);

            PlanHistory::where('id', $request->ID)->update([
                'status' => 3
            ]);

            $tien = $request->money_plan_old - $request->post_money;
            $user = User::find(Auth::id());
            $user->money += $tien;

            $user->save();
            return redirect()->back()->with('success', 'Thay đổi gói bài đăng thành công');

        } else {
            $id = $model->create([
                'plan_id' => $request->post_plan_id,
                'motel_id' => $idMotel,
                'day' => $request->post_day,
                'status' => 1,
                'parent_id' => 0,
            ]);
            $model->create([
                'plan_id' => $request->post_plan_id,
                'motel_id' => $idMotel,
                'day' => $request->post_day,
                'status' => 2,
                'parent_id' => $id,
            ]);
            $user = User::find(Auth::id());
            $user->money -= $request->post_money;

            $user->save();


            return redirect()->back()->with('success', 'Đăng bài thành công');
        }


    }
}
