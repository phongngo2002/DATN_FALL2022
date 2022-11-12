<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\MotelsImport;
use App\Mail\ConfirmOutMotel;
use App\Mail\ForgotOtp;
use App\Mail\NotificeDelMotel;
use App\Models\Area;
use App\Models\Category;
use App\Models\Deposit;
use App\Models\Motel;
use App\Models\Plan;
use App\Models\PlanHistory;
use App\Models\PrintPdf;
use App\Models\User;
use App\Models\UserMotel;
use Carbon\Carbon;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class MotelController extends Controller
{
    private $v;

    public function __construct()
    {
        $this->v = [];
        $arr = [
            'function' => [
                'index_motels',
                'add_motels',
                'saveAdd_motels',
                'info_user_motels',
                'add_people_of_motels',
                'create_post_motels',
                'save_create_post_motels',
                'contact_motel'
            ]
        ];
        foreach ($arr['function'] as $item) {
            $this->middleware('check_permission:' . $item)->only($item);
        }
    }

    public function index_motels($id, Request $request)
    {
        $motel = new Motel();
        $this->v['motels'] = $motel->LoadMotelsWithPage($request->all(), $id);
        $this->v['id'] = $id;
        return view('admin.motel.list', $this->v);
    }

    public function add_motels($id)
    {
        $this->v['area_id'] = $id;
        return view('admin.motel.add', $this->v);
    }

    public function saveAdd_motels(Request $request, $id)
    {
        $params['cols'] = array_map(function ($item) {
            if ($item == '') {
                $item = '';
            }
            if (is_string($item)) {
                $item = trim($item);
            }

            return $item;
        }, $request->all());

        unset($params['cols']['_token']);
        $params['cols']['area_id'] = $request->id;
        $imgs = [];
        foreach (json_decode($request->img) as $file) {
            $uploadedFileUrl = cloudinary()->upload($file, [
                'resource_type' => 'auto',
                'folder' => 'DATN_FALL2022'
            ])->getSecurePath();;

            $imgs[] = $uploadedFileUrl;

        }
        $params['cols']['photo_gallery'] = $imgs;
        $model = new Motel();

        $result = $model->createMotel($params['cols']);

        return redirect()->route('admin.motel.list', ['id' => $id]);
    }

    public function info_user_motels($id, $idMotel)
    {
        $model = new Motel();
        $this->v['id'] = $id;

        $this->v['info'] = $model->info_motel($idMotel);
        $ids = [];
        $userInfo = DB::table('users')
            ->select(['user_id'])
            ->join('user_motel', 'users.id', '=', 'user_motel.user_id')
            ->where('user_motel.status', 1)
            ->get();
        foreach ($userInfo as $item) {
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

    public function add_peolpe_of_motels(Request $request, $id, $idMotel)
    {
        $type = $request->type ?? 0;
        $model = new UserMotel();

        $model->add($idMotel, $request->user_id, $type);

        return redirect()->route('admin.motel.info', ['id' => $id, 'idMotel' => $idMotel])->with('success', 'Thêm mới thành viên phòng thành công');
    }

    public function create_post_motels(Request $request, $id, $idMotel)
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

    public function save_create_post_motels(Request $request, $id, $idMotel)
    {
        // dd($request->post());
        $model = new PlanHistory();
        if ($request->gia_han) {
            $model->create([
                'plan_id' => $request->plan_id_o,
                'motel_id' => $idMotel,
                'day' => $request->post_day_more,
                'status' => 2,
                'parent_id' => $request->ID,
                'is_first' => 0
            ]);

            $planHistory = PlanHistory::find($request->ID);

            $planHistory->day += $request->post_day_more;

            $planHistory->save();

            $user = User::find(Auth::id());
            $user->money -= $request->post_money_more;

            $user->save();
            return redirect()->back()->with('success', 'Gia hạn bài đăng thành công');
        } else if ($request->change_plan) {
            $model->create([
                'plan_id' => $request->plan_id_o,
                'motel_id' => $idMotel,
                'day' => $request->old_day,
                'status' => 4,
                'parent_id' => 0,
                'is_first' => 0
            ]);
            $id = $model->create([
                'plan_id' => $request->post_plan_id,
                'motel_id' => $idMotel,
                'day' => $request->post_day,
                'status' => 1,
                'parent_id' => 0,
                'is_first' => 0
            ]);
            $model->create([
                'plan_id' => $request->post_plan_id,
                'motel_id' => $idMotel,
                'day' => $request->post_day,
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
                'plan_id' => $request->post_plan_id,
                'motel_id' => $idMotel,
                'day' => $request->post_day,
                'status' => 1,
                'parent_id' => 0,
                'is_first' => 0
            ]);
            $model->create([
                'plan_id' => $request->post_plan_id,
                'motel_id' => $idMotel,
                'day' => $request->post_day,
                'status' => 2,
                'parent_id' => $id,
                'is_first' => 1
            ]);
            $user = User::find(Auth::id());
            $user->money -= $request->post_money;

            $user->save();


            return redirect()->back()->with('success', 'Đăng bài thành công');
        }


    }

    public function contact_motel(Request $request, $id, $idMotel)
    {
        $model = new Motel();

        $this->v['list'] = $model->get_list_contact($idMotel, $id);
        $this->v['motel_id'] = $idMotel;
        $this->v['area_id'] = $id;
        return view('admin.motel.list_contact_motel', $this->v);
    }

    public function detail_motels($id, $idMotel)
    {

        $motel = new Motel();
        $this->v['motel'] = $motel->detail_motels($idMotel);
        $this->v['photo_gallery'] = $this->v['motel']->photo_gallery;
    }


    public function edit_motels($id, $idMotel)
    {
        $category = new Category();
        $this->v['categories'] = $category->getAll();
        $motel = new Motel();
        $this->v['motel'] = $motel->detailMotel($idMotel);
        return view('admin.motels.edit', $this->v);
    }

    public function saveUpdate_motels(Request $request, $id)
    {
        $modelMotel = new Motel();

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

        $data = [
            'room_number' => $request->room_number,
            'price' => $request->price,
            'area' => $request->area,
            'description' => $request->description,
            'video' => $request->video,
            'image_360' => $request->image_360,
            'max_people' => $request->max_people,
            'services' => json_encode([
                'bed' => $request->bed,
                'bedroom' => $request->bedroom,
                'toilet' => $request->toilet,
                'more' => $request->service_more,
                'actor' => $request->actor
            ]),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $imgs = [];
        foreach (json_decode($request->img) as $file) {
            if (strpos($file, 'https://res.cloudinary.com') === false) {
                $file = cloudinary()->upload($file, [
                    'resource_type' => 'auto',
                    'folder' => 'DATN_FALL2022'
                ])->getSecurePath();;
            }

            $imgs[] = $file;
        }
        $data['photo_gallery'] = json_encode($imgs);

        $modelMotel->saveUpdate_motels($data, $request->id);
        return redirect()->route('admin.motel.list', $request->area_id)->with('success', 'Cập nhật phòng trọ thành công');
    }

    public
    function history_motel($id, $idMotel)
    {
        $model = new UserMotel();

        $this->v['histories'] = $model->historyMotel($idMotel);
        $this->v['id'] = [$id, $idMotel];
        return view('admin.motel.history', $this->v);
    }

    public
    function print(Request $request, $motelId)
    {
        Motel::where('id', $motelId)->update([
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);
        $model = new PrintPdf();;
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($model->printMotel($motelId, $request->start_time, $request->end_time));
        return $pdf->stream();
    }

    public function import(Request $request)
    {
        Excel::import(new MotelsImport($request->area_id), $request->file('file'));

        return redirect()->back()->with('success', 'Nhập danh sách thành công');
    }

    public function duplicate(Request $request, $id, $idMotel)
    {
        $motel = Motel::find($idMotel);
        $newMotel = $motel->replicate();
        $newMotel->created_at = Carbon::now();
        $newMotel->status = 1;
        $newMotel->save();

        return redirect()->back()->with('success', 'Sao chép dữ liệu phòng ' . $motel->room_number . ' thành công');
    }

    public function list_out_motel(Request $request, $id, $idMotel)
    {

        $this->v['id'] = [$id, $idMotel];
        $this->v['list'] = DB::table('users')
            ->select(['name', 'email', 'phone_number', 'start_time', 'user_motel.status', 'user_motel.id'])
            ->join('user_motel', 'users.id', '=', 'user_motel.user_id')
            ->where('motel_id', $idMotel)
            ->where('user_motel.status', '=', 2)
            ->paginate(10);
        return view('admin.motel.list_out_motel', $this->v);
    }

    public function confirm_out_motel(Request $request, $id)
    {
        // dd($request->all(), $id);
        $res = DB::table('user_motel')->where('id', $id)->update([
            'status' => 0,
            'end_time' => Carbon::now()
        ]);

        $user = UserMotel::where('motel_id', $request->motel_id)->where('status', 1)->get();
        if (count($user) === 0) {

            try {
                $motel = Motel::find($request->motel_id);
                $motel->status = 1;
                $motel->end_time = Carbon::now()->format('Y-m-d');
                $motel->save();
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
        }
        Mail::to($request->email)->send(new ConfirmOutMotel());
        return redirect()->back()->with('success', 'Cập nhật đơn rời phòng thành công');
    }

    public function deleteUserFormMotel(Request $request, $id)
    {
        $res = DB::table('user_motel')->where('id', $id)->update([
            'status' => 3 //status = 3 : bị xóa do hết hạn
        ]);

        $user = UserMotel::where('motel_id', $request->motel_id)->where('status', 1)->get();
        if (count($user) === 0) {
            try {
                $motel = Motel::find($request->motel_id);
                $motel->status = 1;
                $motel->end_time;
                $motel->save();
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
        }
        Mail::to($request->email)->send(new NotificeDelMotel());
        return redirect()->back()->with('success', 'Xóa thành công thành viên!');
    }
}
