<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PlanHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        "plan_id",
        "motel_id",
        "plans.name as planName",
        "motels.room_number as motelRoomNumber"
    ];

    protected $table = "plan_history";

    public function LoadPlansHistoryWithPage($params=[]){
        $plansHistory= DB::table($this->table)
                ->join('plans','plan_history.plan_id', '=','plans.id')
                ->join('motels', 'plan_history.motel_id', '=','motels.id')
                ->select($this->fillable)
                ->get();
        return $plansHistory;
    }
}
