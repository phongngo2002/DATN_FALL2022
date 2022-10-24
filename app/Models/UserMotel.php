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
}
