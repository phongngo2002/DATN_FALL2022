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
            ->select(['room_number', 'price', 'max_people', 'status', 'id', 'area_id'])
            ->where('area_id', $id);

//        if ($params['name']) {
//            $motels->where('room_number', 'like', '%' . $params['name'] . '%');
//        }
//
//        return $motels->orderBy('id', $params['order_by'])
//            ->paginate($params['limit']);

        return $motels->get();
    }

    public function detailMotel($idMotel)
    {
        $this->fillable[] = "areas.name as areaName";
        $this->fillable[] = "categories.name as categoryName";
        $this->fillable[3] = "motels.status as motel_status";
        $motel = DB::table($this->table)
            ->select($this->fillable)
            ->join('areas', 'areas.id', '=', "motels.area_id")
            ->join('categories', 'motels.category_id', '=', 'categories.id')
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
            'services' => $data['service'],
            'max_people' => $data['max_people'],
            'status' => 1
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


}
