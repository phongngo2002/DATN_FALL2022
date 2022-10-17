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
        "max_people",
        "start_time",
        "end_time",
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
            ->select($this->fillable)
            ->where('area_id', $id);

        if ($params['name']) {
            $motels->where('room_number', 'like', '%' . $params['name'] . '%');
        }

        return $motels->orderBy('id', $params['order_by'])
            ->paginate($params['limit']);
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
}
