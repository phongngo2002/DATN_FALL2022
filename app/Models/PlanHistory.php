<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlanHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        "plan_id",
        "motel_id",
        'area_id',
        'time',
        'plan_history.created_at as date',
        "plans.name as planName",
        "areas.name as areaName",
        "motels.room_number as motelRoomNumber"
    ];

    protected $table = "plan_history";

    public function LoadPlansHistoryWithPage($params = [])
    {
        $plansHistory = DB::table($this->table)
            ->join('plans', 'plan_history.plan_id', '=', 'plans.id')
            ->join('motels', 'plan_history.motel_id', '=', 'motels.id')
            ->join('areas', 'motels.area_id', '=', 'areas.id')
            ->join('users', 'areas.user_id', '=', 'users.id')
            ->select($this->fillable)
            ->where('users.id', Auth::id())
            ->get();
        return $plansHistory;
    }
}
