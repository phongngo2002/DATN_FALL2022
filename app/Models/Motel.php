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
        'bed',
        'bedroom',
        'toilet',
        'more',
        'actor',
        "address",
        "max_people",
        "start_time",
        "end_time",
        "desc",
        "category_id",
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

    public function saveNew($data)
    {
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
                'bed',
                'bedroom',
                'toilet',
                'more',
                'actor',
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
            ])
            ->join('areas', 'areas.id', '=', "motels.area_id")
            ->join('categories', 'categories.id', '=', 'motels.category_id')
            ->join('users', 'areas.user_id', '=', 'users.id')
            ->where('motels.id', $idMotel)->first();
        return $motel;
    }

    public function createMotel($data = [])
    {
        $query = DB::table($this->table)->insert([
            'room_number' => $data['room_number'],
            'price' => $data['price'],
            'area' => $data['area'],
            'area_id' => $data['area_id'],
            'description' => $data['desc'],
            'image_360' => $data['image360'],
            'photo_gallery' => $data['img'],
            'max_people' => $data['max_people'],
            'status' => 1,
            'video' => $data['video'],
            'bed' => $data['bed'],
            'bedroom' => $data['bedroom'],
            'toilet' => $data['toilet'],
            'more' => $data['service_more'],
            'actor' => $data['actor']
        ]);
        return 1;
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
}
