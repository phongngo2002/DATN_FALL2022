<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\CollectionModify;

class PlanHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        "plan_id",
        "motel_id",
        'area_id',
        'day',
        'time',
        'plan_history.created_at as date',
        "plans.name as planName",
        "areas.name as areaName",
        "room_number",
        'parent_id',
        'plan_history.created_at as created_at',
        'plan_history.status as tt',
        'parent_id',
        'plans.price as gia',
        'is_first'
    ];

    protected $table = "plan_history";

    public function LoadPlansHistoryWithPage($params = [])
    {
        $order_by = $params['order_by'] ?? 'desc';
        $limit = $params['limit'] ?? 10;
        $plansHistory = DB::table('plans')
            ->select($this->fillable)
            ->join('plan_history', 'plans.id', '=', 'plan_history.plan_id')
            ->join('motels', 'plan_history.motel_id', '=', 'motels.id')
            ->join('areas', 'motels.area_id', '=', 'areas.id')
            ->join('users', 'areas.user_id', '=', 'users.id');
        if (isset($params['name'])) {
            $plansHistory = $plansHistory->Where('room_number', $params['name']);
        }
        if (!Auth::user()->is_admin) {
            $plansHistory = $plansHistory->where('users.id', Auth::id());
        }
        return $plansHistory->where('plan_history.status', '>', 1)
            ->orderBy('plan_history.id', $order_by)->paginate($limit);
    }


    public function create($data)
    {
        $query = DB::table($this->table)->insertGetId([
            'plan_id' => $data['plan_id'],
            'motel_id' => $data['motel_id'],
            'day' => $data['day'],
            'status' => $data['status'],
            'parent_id' => $data['parent_id'],
            'is_first' => $data['is_first'],
            'created_at' => Carbon::now()
        ]);

        return $query;
    }

    public function updateCurrentPlanHistory($motel_id, $plan_id, $day)
    {
        $query = DB::table($this->table)->where('motel_id', $motel_id)
            ->where('plan_id', $plan_id)
            ->where('status', 1)
            ->update([
                'day' => $day
            ]);

        return 1;
    }
}
