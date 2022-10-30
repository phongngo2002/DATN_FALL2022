<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserMotel extends Model
{
    use HasFactory;

    protected $table = "user_motel";

    public function add($motel_id, $user_id)
    {
        $model = DB::table($this->table)->insert([
            'motel_id' => $motel_id,
            'user_id' => $user_id,
            'start_time' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        $motel = DB::table('motels')->where('id', $motel_id);

        if ($motel->first()->status) {
            $motel->update([
                'status' => 2
            ]);
        }

        return 1;
    }

    public function historyMotel($motel_id)
    {
        return DB::table($this->table)
            ->select(['name', 'email', 'phone_number', 'user_motel.status as tt', 'user_motel.start_time as bd', 'user_motel.end_time as kt'])
            ->join('users', 'user_motel.user_id', '=', 'users.id')
            ->where('motel_id', $motel_id)
            ->paginate(10);
    }
    
    public function currentMotel($user_id,$motel_id=null)
    {
        return DB::table($this->table)
            ->join('motels', 'user_motel.motel_id', '=', 'motels.id')
            ->join('areas', 'motels.area_id', '=', 'areas.id')
            ->select(['motels.id as motel_id','motels.photo_gallery','motels.description','areas.name as area_name','areas.address','user_motel.status','user_motel.start_time as user_motel_start_time','user_motel.end_time as user_motel_end_time','motels.room_number','motels.price','motels.data_post'])
            ->where('user_motel.user_id', $user_id)
            ->where(function($query) use ($motel_id){
                if($motel_id != null){
                    $query->where('motels.id', $motel_id);
                }
            })->orderBy('user_motel_start_time','desc')
            // ->limit(1)
            ->get();
    }
    public function number_people_live_now($motel_id){
        return DB::table($this->table)
        ->select('user_id')->where('motel_id', $motel_id)
        ->get();
    }
   
}
