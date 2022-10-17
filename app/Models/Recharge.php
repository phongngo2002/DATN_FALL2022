<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Recharge extends Model
{
    use HasFactory;

    protected $table = 'recharges';


    public function admin_get_list_recharges($params = [])
    {
        $order_by = $params['order_by'] ?? 'desc';

        $email = $params['email'] ?? '';

        $limit = $params['limit'] ?? 10;

        $query = DB::table($this->table)
            ->select(['recharge_code', 'email', 'date', 'value', 'recharges.status as tt', 'payment_type', 'name', 'phone_number', 'note'])
            ->join('users', 'recharges.user_id', '=', 'users.id')
            ->where('user_id', Auth::id());

        if ($email) {
            $query = $query->where('email', $email);
        }
        return $query->orderBy('date', $order_by)
            ->paginate($limit);
    }
}
