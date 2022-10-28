<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ContactMotelHistory extends Model
{
    use HasFactory;

    protected $table = 'contact_motel_history';

    public function create_history($data)
    {
        $res = DB::table($this->table)->insert([
            'user_id' => Auth::id(),
            'motel_id' => $data['id'],
            'status' => 0,
            'created_at' => Carbon::now()
        ]);

        return $res;
    }
}
