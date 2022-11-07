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
        'created_at',
        "video",
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

    public function createMotel($data)
    {
        $res = DB::table($this->table)->insert(
            [
                "room_number" => $data['room_number'],
                "price" => $data['price'],
                "area" => $data['area'],
                'status' => 1,
                "area_id" => $data['area_id'],
                "description" => $data['description'],
                "image_360" => $data['image_360'],
                "photo_gallery" => json_encode($data['photo_gallery']),
                "services" => json_encode([
                    'bed' => $data['bed'],
                    'bedroom' => $data['bedroom'],
                    'toilet' => $data['toilet'],
                    'more' => $data['service_more'],
                    'actor' => $data['actor']
                ]),
                "max_people" => $data['max_people'],
                "category_id" => 1,
                "video" => $data['video'],
            ]
        );

        return $res;
    }

    public function saveNew($data)
    {
        $res = DB::table($this->table)->insertGetId($data);
        return $res;
    }

    public function detailMotel($idMotel)
    {
        $motel = DB::table('categories')
            ->select([
                'motels.id as motel_id',
                'area_id',
                'areas.name as areaName',
                'category_id',
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
                'areas.address as area_address',
                'areas.link_gg_map as area_link_gg_map',
                'motels.updated_at as motel_updateAt',
                'categories.name as category_name',
                'users.name as user_name',
                'users.address as user_address',
                'users.avatar as user_avatar',
                'users.phone_number as user_phone',
                'users.email as user_email',
                'start_time',
                'video'
            ])
            ->join('motels', 'categories.id', '=', 'motels.category_id')
            ->join('areas', 'areas.id', '=', "motels.area_id")
            ->join('users', 'areas.user_id', '=', 'users.id')
            ->where('motels.id', $idMotel)
            ->first();
        return $motel;
    }

    public function detailMotel1($idMotel)
    {
        $motel = DB::table('categories')
            ->select([
                'motels.id as motel_id',
                'area_id',
                'areas.name as areaName',
                'category_id',
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
                'areas.address as area_address',
                'areas.link_gg_map as area_link_gg_map',
                'motels.updated_at as motel_updateAt',
                'categories.name as category_name',
                'users.name as user_name',
                'users.address as user_address',
                'users.avatar as user_avatar',
                'users.phone_number as user_phone',
                'users.email as user_email',
                'start_time',
                'video'
            ])
            ->join('motels', 'categories.id', '=', 'motels.category_id')
            ->join('areas', 'areas.id', '=', "motels.area_id")
            ->join('users', 'areas.user_id', '=', 'users.id')
            ->where('motels.id', $idMotel)
            ->first();
        if ($motel) {
            $currentPlanMotel = PlanHistory::join('plans', 'plan_history.plan_id', '=', 'plans.id')->where('motel_id', $motel->motel_id)->where('type', 1)->where('plan_history.status', 1)->first();
            if ($currentPlanMotel) {
                return $motel;
            }
        }


        return null;
    }

    public function delete_motels($id)
    {
        return DB::table('motels')->where('id', $id)->delete();
    }


    public function info_motel($id)
    {
        return DB::table('users')
            ->select(['name', 'phone_number', 'start_time', 'motel_id', 'user_id', 'email'])
            ->join('user_motel', 'users.id', '=', 'user_motel.user_id')
            ->where('motel_id', $id)
            ->where('user_motel.status', 1)
            ->get();
    }

    public function get_list_contact($motel_id, $area_id)
    {
        return DB::table('users')
            ->select(['contact_motel_history.user_id', 'motels.id as motel_id', 'area_id', 'name', 'email', 'phone_number', 'contact_motel_history.status as tt', 'contact_motel_history.created_at as tg', 'contact_motel_history.id as contact_id'])
            ->join('contact_motel_history', 'users.id', '=', 'contact_motel_history.user_id')
            ->join('motels', 'contact_motel_history.motel_id', '=', 'motels.id')
            ->where('area_id', $area_id)
            ->where('motel_id', $motel_id)
            ->orderBy('contact_motel_history.created_at', 'desc')
            ->paginate(10);
    }

    public function get_list_contact_by_user($id)
    {
        return DB::table('users')
            ->select(['contact_motel_history.user_id', 'motels.id as motel_id', 'area_id', 'name', 'email', 'phone_number', 'contact_motel_history.status as tt', 'contact_motel_history.created_at as tg', 'contact_motel_history.id as contact_id'])
            ->join('contact_motel_history', 'users.id', '=', 'contact_motel_history.user_id')
            ->join('motels', 'contact_motel_history.motel_id', '=', 'motels.id')
            ->where('user_id', $id)
            ->orderBy('contact_motel_history.created_at', 'desc')
            ->paginate(10);
    }

    public function client_get_List_Motel_top()
    {

        return DB::table('areas')
            ->select(['motels.id as motel_id', 'areas.name as areaName', 'motels.room_number', 'motels.price', 'motels.area', 'services', 'motels.max_people', 'motels.area_id', 'areas.address', 'motels.photo_gallery as photo_gallery_i', 'plan_history.plan_id'])
            ->join('motels', 'areas.id', '=', 'motels.area_id')
            ->join('plan_history', 'motels.id', '=', 'plan_history.motel_id')
            ->join('plans', 'plan_history.plan_id', 'plans.id')
            ->where('plan_history.status', 1)
            ->where('type', 1)
            ->orderBy('priority_level', 'asc')
            ->paginate(10);
    }

    public function client_get_List_Motel_contact()
    {

        return DB::table('areas')
            ->select(['motels.room_number', 'motels.price', 'motels.area', 'services', 'motels.max_people', 'motels.area_id', 'areas.address', 'motels.photo_gallery', 'plan_history.plan_id', 'data_post', 'motels.id'])
            ->join('motels', 'areas.id', '=', 'motels.area_id')
            ->join('plan_history', 'motels.id', '=', 'plan_history.motel_id')
            ->join('plans', 'plan_history.plan_id', 'plans.id')
            ->where('type', 2)
            ->where('plan_history.status', 1)
            ->orderBy('priority_level', 'asc')
            ->get();
    }

    public function client_Get_all_Motel()
    {
        return DB::table('plans')
            ->select(['motels.room_number', 'areas.name as areaName', 'motels.price', 'priority_level', 'plans.name', 'motels.area', 'services', 'motels.max_people', 'motels.area_id', 'areas.address', 'motels.photo_gallery', 'motels.id as motel_id'])
            ->join('plan_history', 'plans.id', '=', 'plan_history.plan_id')
            ->join('motels', 'plan_history.motel_id', '=', 'motels.id')
            ->join('areas', 'areas.id', '=', 'motels.area_id')
            ->where('plan_history.status', 1)
            ->where('type', 1)
            ->orderBy('priority_level', 'asc')
            ->paginate(10);
    }

    public function saveUpdate_motels($data, $id)
    {
        return DB::table('motels')->where('id', $id)->update($data);
    }

    public function users()
    {
        return $this->hasMany(UserMotel::class, "motel_id", "id");
    }

    public function infoMotelLiveTogether($motel_id)
    {
        $countUser = DB::table('users')
            ->join('user_motel', 'users.id', '=', 'user_motel.user_id')
            ->where('motel_id', $motel_id)
            ->where('user_motel.status', 1)
            ->count();
        $motel = DB::table('plans')
            ->select([
                'motels.id as motel_id',
                'area_id',
                'priority_level',
                'areas.name as areaName',
                'room_number',
                'motels.price',
                'area',
                'image_360',
                'photo_gallery',
                'services',
                'end_time',
                'max_people',
                'areas.address as address',
                'description',
                'areas.address as area_address',
                'areas.link_gg_map as area_link_gg_map',
                'motels.updated_at as motel_updateAt',
                'users.name as user_name',
                'users.address as user_address',
                'users.avatar as user_avatar',
                'users.phone_number as user_phone',
                'users.email as user_email',
                'start_time',
                'data_post',
                'video'
            ])
            ->join('plan_history', 'plans.id', '=', 'plan_history.plan_id')
            ->join('motels', 'plan_history.motel_id', '=', 'motels.id')
            ->join('areas', 'areas.id', '=', "motels.area_id")
            ->join('users', 'areas.user_id', '=', 'users.id')
            ->where('motels.id', $motel_id)
            ->where('plan_history.status', 1)
            ->where('type', 2)
            ->first();
        if ($motel) {
            return $motel;
        }
        return null;

    }
}
