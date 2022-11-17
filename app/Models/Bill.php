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

    protected $fillable = ['motel_id', 'title', 'status', 'number_elec', 'number_warter', 'number_elec_old', 'number_warter_old'];


    public function admin_get_list_bill($params = [])
    {
        $query = DB::table('areas')
            ->selectRaw('name,bills.id as bill_id,room_number,
            price,
            (electric_money * (number_elec - number_elec_old)) as tien_dien,
            (warter_money * (number_warter - number_warter_old)) as tien_nuoc,
            wifi,

            bills.created_at,
            bills.status
            ,(electric_money * (number_elec - number_elec_old) + warter_money * (number_warter - number_warter_old) + wifi  + price) as tong')
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


    public function client_get_list_bill_user()
    {
        $query = DB::table('user_motel')
            ->selectRaw('bills.id,
            area_id,
            room_number,
            price,
           (electric_money * (number_elec - number_elec_old)) as tien_dien,
            (warter_money * (number_warter - number_warter_old)) as tien_nuoc,
            wifi,
            bills.created_at,
            bills.status
          ,(electric_money * (number_elec - number_elec_old) + warter_money * (number_warter - number_warter_old) + wifi + price) as tong')
            ->join('motels', 'user_motel.motel_id', '=', 'motels.id')
            ->join('bills', 'motels.id', '=', 'bills.motel_id')
            ->orderBy('bills.created_at', 'desc')
            ->where('user_motel.user_id', Auth::id())
            ->paginate(10);
        foreach ($query as $a) {
            $a->area_name = DB::table('areas')->select('name')->where('id', $a->area_id)->first()->name;
        }
        return $query;
    }
}
