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
        "area_id",
        "description",
        "image_360",
        "photo_gallery",
        "services",
        "status",
        "max_people",
        "start_time",
        "end_time",
        "category_id"
    ];

    protected $table = "motels";

    // public function category(){
    //     return $this->belongsTo(Cate::class,'category_realty_id');
    // }

    public function LoadMotelsWithPage($params=[], $id){
        $this->fillable[] = "id";
        $motels = DB::table($this->table)
                ->select($this->fillable)
                ->where('category_id',$id)
                ->get();
        return $motels;
    }

    public function detailMotel($idMotel){
        $this->fillable[] = "areas.name as areaName";
        $this->fillable[] = "categories.name as categoryName";
        $motel = DB::table($this->table)
                ->join('areas', 'areas.id', 'motels.area_id', "=")
                ->join('categories', 'motels.category_id', 'categories.id')
                ->select($this->fillable)
                ->where('motels.id', $idMotel)->first();
        return $motel;
    }
}
