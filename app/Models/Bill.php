<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bills';

    protected $fillable = ['motel_id', 'title', 'status', 'number_elec', 'number_warter'];


    public function admin_get_list_bill($params = [])
    {
        $query = DB::table('areas')
            ->selectRaw('name,bills.id,room_number,
            price,
            (electric_money * number_elec) as tien_dien,
            (warter_money * number_warter) as tien_nuoc,
            wifi,
            bills.created_at,
            bills.status
            ,(electric_money * number_elec + warter_money * number_warter + wifi) as tong')
            ->join('motels', 'areas.id', '=', 'motels.area_id')
            ->join('bills', 'motels.id', '=', 'bills.motel_id')
            ->where('areas.user_id', Auth::id());
        if (isset($params['area_id'])) {
            $query = $query
                ->where('area_id', $params['area_id'])
                ->where('room_number', $params['room_number']);
        }
        if (isset($params['year'])) {
            $query = $query->whereRaw('YEAR(created_at) = ' . $params['year'])
                ->whereRaw('Month(created_at) ' . $params['month']);
        }

        return $query->orderBy('bills.id', 'desc')
            ->paginate($params['limit'] ?? 10);

    }
}
