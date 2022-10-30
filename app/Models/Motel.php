<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Motel extends Model
{
    use HasFactory;

    protected $fillable = [

        "room_number",
        "price",
        "area",
        'status',
        "area_id",
        "description",
        "image_360",
        "photo_gallery",
        "services",
        "address",
        "max_people",
        "start_time",
        "end_time",
        "category_id",
        "video",
        "category_id"
    ];

    protected $table = "motels";

    public function LoadMotelsWithPage($params = [], $id)
    {
        $this->fillable[] = "id";

        $params['order_by'] = $params['order_by'] ?? 'desc';
        $params['name'] = $params['name'] ?? '';
        $params['limit'] = $params['limit'] ?? 10;

        $motels = DB::table($this->table)
            ->select(['room_number', 'price', 'max_people', 'status', 'id', 'area_id', 'image_360'])
            ->where('area_id', $id);

        if ($params['name']) {
            $motels->where('room_number', 'like', '%' . $params['name'] . '%');
        }

        return $motels->orderBy('id', $params['order_by'])
            ->paginate($params['limit']);

    }

    public function saveNew($data){
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }

    public function detailMotel($idMotel)
    {
        $motel = DB::table($this->table)
            ->select([
                'motels.id as motel_id',
                'room_number',
                'price',
                'area',
                'image_360',
                'photo_gallery',
                'services',
                'end_time',
                'max_people',
                'areas.address as address',
                'description',
                'areas.name as area_name',
                'areas.address as area_address',
                'areas.link_gg_map as area_link_gg_map',
                'motels.updated_at as motel_updateAt',
                'categories.name as category_name',
                'users.name as user_name',
                'users.address as user_address',
                'users.avatar as user_avatar',
                'users.phone_number as user_phone',
                'users.email as user_email',
                'video'
            ])
            ->join('areas', 'areas.id', '=', "motels.area_id")
        ->join('categories', 'categories.id', '=', 'motels.category_id')
        ->join('users', 'areas.user_id', '=', 'users.id')
        ->where('motels.id', $idMotel)->first();
        return $motel;
    }

    public function delete_motels($id){
        return DB::table('motels')->where('id',$id)->delete();
    }


    public function info_motel($id)
    {
        return DB::table('users')
            ->select(['name', 'phone_number', 'start_time', 'motel_id', 'user_id'])
            ->join('user_motel', 'users.id', '=', 'user_motel.user_id')
            ->where('motel_id', $id)
            ->where('user_motel.status', 1)
            ->get();
    }

    public function get_list_contact($motel_id, $area_id)
    {
        return DB::table('users')
            ->select(['name', 'email', 'phone_number', 'contact_motel_history.status as tt', 'contact_motel_history.created_at as tg'])
            ->join('contact_motel_history', 'users.id', '=', 'contact_motel_history.user_id')
            ->join('motels', 'contact_motel_history.motel_id', '=', 'motels.id')
            ->where('area_id', $area_id)
            ->where('motel_id', $motel_id)
            ->orderBy('contact_motel_history.created_at', 'desc')
            ->paginate(10);
    }
    public function client_get_List_Motel_top(){

     return  DB::table('areas')
        ->select(['motels.room_number', 'motels.price','motels.area', 'services','motels.max_people','motels.area_id','areas.address','motels.photo_gallery','plan_history.plan_id'])
        ->join('motels','areas.id','=','motels.area_id')
        ->join('plan_history','motels.id','=','plan_history.motel_id')
        ->orderByDesc('plan_history.plan_id')
        ->limit(6)
        ->get();
    }
    public function client_get_List_Motel_contact(){

        return  DB::table('areas')
           ->select(['motels.room_number','contact_motel_history.status', 'motels.price','motels.area', 'services','motels.max_people','motels.area_id','areas.address','motels.photo_gallery','plan_history.plan_id'])
           ->join('motels','areas.id','=','motels.area_id')
           ->join('plan_history','motels.id','=','plan_history.motel_id')
           ->join('contact_motel_history','motels.id', '=','contact_motel_history.motel_id' )

           ->orderByDesc('plan_history.plan_id')
           ->limit(6)
           ->get();
       }
    public function client_Get_all_Motel(){
        return DB::table('motels')
        ->select(['motels.room_number', 'motels.price','motels.area', 'services','motels.max_people','motels.area_id','areas.address','motels.photo_gallery'])
        ->join('areas','areas.id','=','motels.area_id')
        ->paginate(6);
    }

}
