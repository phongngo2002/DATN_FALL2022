<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ContactMotelHistory;
use App\Models\Plan;
use App\Models\PlanHistory;
use App\Models\User;
use App\Models\UserMotel;
use Illuminate\Support\Facades\DB;
use App\Mail\SendMailContact;
use App\Models\Deposit;
use App\Models\Motel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class MotelController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
    }

    public function currentMotel()
    {
        $model = new UserMotel();
        $this->v['motels'] = $model->currentMotel();
        // dd($this->v['motels']);
        return view('client.account_management.current_motel', $this->v);
    }

    public function postLiveTogether($motel_id)
    {

        $this->v['plans'] = Plan::select(['id', 'name', 'type', 'time', 'price', 'status'])->where('type', 2)->where('status', 1)->get();
        $data = [];
        foreach ($this->v['plans'] as $i) {
            $data[] = [
                'id' => $i->id,
                'title' => $i->name,
                'price' => $i->price,
                'time' => $i->time
            ];
        }
        $this->v['data_plan'] = json_encode($data);

        $this->v['current_plan_motel'] = DB::table('plan_history')
            ->select(['name', 'day', 'price', 'plan_history.created_at as created_at_his', 'plan_id', 'plan_history.id as ID', 'priority_level'])
            ->join('plans', 'plan_history.plan_id', '=', 'plans.id')
            ->where('motel_id', $motel_id)
            ->where('type', 2)
            ->where('plan_history.status', 1)
            ->first();

        // dd( $this->v['data_plan']);

        $model = new UserMotel();
        $this->v['motels'] = $model->currentMotel1($motel_id);
        $this->v['number_people'] = count($model->number_people_live_now($motel_id));
        $this->v['user'] = Auth::user();
        // dd($this->v['current_plan_motel']);
        // dd($this->v['motels']);
        $this->v['data_post'] = json_decode($this->v['motels']->data_post);
        // dd($this->v['data_post']);
        return view('client.account_management.post_live_together', $this->v);
    }


    public function savePostLiveTogether(Request $request)
    {

        $params = array_map(function ($item) {
            if ($item == '') {
                $item == null;
            }
            if (is_string($item)) {
                $item = trim($item);
            }
            return $item;
        }, $request->post());
        unset($params['_token']);

        $data_post = [
            'title' => $params['title'],
            'description' => $params['description'],
            'gender' => $params['gender'],
            'user_id' => Auth::user()->id,
            'number_people' => $params['number_people'],
        ];
        $data_post = json_encode($data_post);
        Motel::where('id', $request->motel_id)->update([
            'data_post' => $data_post,
        ]);
        $model = new PlanHistory();

        if ($request->gia_han) {
            $model->create([
                'plan_id' => $request->plan_id_old,
                'motel_id' => $request->motel_id,
                'day' => $request->post_day_more,
                'status' => 2,
                'parent_id' => $request->ID,
                'user_id' => Auth::id(),
                'is_first' => 0
            ]);

            $planHistory = PlanHistory::find($request->ID);

            $planHistory->day += $request->post_day_more;

            $planHistory->save();

            $user = User::find(Auth::id());
            $user->money -= $request->post_money;

            $user->save();
            return redirect()->back()->with('success', 'Gia hạn bài đăng thành công');
        } else if ($request->change_plan) {
            $model->create([
                'plan_id' => $request->plan_id_old,
                'motel_id' => $request->motel_id,
                'day' => $request->old_day,
                'user_id' => Auth::id(),
                'status' => 4,
                'parent_id' => 0,
                'is_first' => 0
            ]);
            $id = $model->create([
                'plan_id' => $request->post_plan,
                'motel_id' => $request->motel_id,
                'day' => $request->post_day,
                'user_id' => Auth::id(),
                'status' => 1,
                'parent_id' => 0,
                'is_first' => 0
            ]);
            $model->create([
                'plan_id' => $request->post_plan,
                'motel_id' => $request->motel_id,
                'day' => $request->post_day,
                'user_id' => Auth::id(),
                'status' => 2,
                'parent_id' => $id,
                'is_first' => 1
            ]);
            PlanHistory::where('id', $request->ID)->update([
                'status' => 0,
            ]);
            $tien = $request->money_plan_old - $request->post_money;
            $user = User::find(Auth::id());
            $user->money += $tien;

            $user->save();
            return redirect()->back()->with('success', 'Thay đổi gói bài đăng thành công');

        } else {


            $id = $model->create([
                'plan_id' => $request->post_plan,
                'motel_id' => $request->motel_id,
                'day' => $request->post_day,
                'status' => 1,
                'user_id' => Auth::id(),
                'parent_id' => 0,
                'is_first' => 0
            ]);
            $model->create([
                'plan_id' => $request->post_plan,
                'motel_id' => $request->motel_id,
                'day' => $request->post_day,
                'status' => 2,
                'user_id' => Auth::id(),
                'parent_id' => $id,
                'is_first' => 1
            ]);
            $user = User::find(Auth::id());
            $user->money -= $request->post_money;
            $user->save();
        }
        return redirect()->back()->with('success', 'Đăng bài thành công');

    }

    public function listLiveTogether()
    {
        $model = new PlanHistory();
        $this->v['motel'] = $model->list_live_together();

        return view('client.account_management.list_live_together', $this->v);
    }

    public function detail($id)
    {
        $motel = new Motel();
        if ($motel->detailMotel1($id)) {
            $this->v['motel'] = $motel->detailMotel1($id);

            $this->v['deposit_exist'] = Deposit::where('motel_id',$id)->where('user_id',Auth::user()->id)->first();
            return view('client.motel.detail', $this->v);
        }
        abort(404);
    }

    public function sendContact(Request $request, $id)
    {


        $model2 = new ContactMotelHistory();

        if ($model2->create_history([
            'id' => $id
        ])) {
            $model = new Motel();
            $data = [];
            $people = $model->info_motel($id);
            foreach ($people as $p) {
                $data[] = $p->email;
            }
            if (!empty($data)) {
                Mail::to($data)->send(new SendMailContact());
            }
        }

        return redirect()->back()->with('success', 'Đăng ký ở ghép thành công');
    }
}
