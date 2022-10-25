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
            $motels->where('name', 'like', '%' . $params['name'] . '%');
        }
    
        return $motels->orderBy('id', $params['order_by'])
            ->paginate($params['limit']);
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
            'status' => 1,
            'start_time'=>now()->toDateTimeString(),
            'category_id'=>$data['category_id']
            
        ]);
        return 1;
    }
    public function saveUpdate_motels($data, $id){
        return DB::table('motels')->where('id',$id)->update($data);
    }
    public function detail_motels($idMotel)
    {   $this->fillable[]="motels.id";
        $this->fillable[] = "areas.name as areaName";
        $this->fillable[] = "categories.name as categoryName";
        $motel = DB::table($this->table)
            ->join('areas', 'areas.id', 'motels.area_id', "=")
            ->join('categories', 'motels.category_id', 'categories.id')
            ->select($this->fillable)
            ->where('motels.id', $idMotel)->first();
          
        return $motel;
    }

    public function delete_motels($id){
        return DB::table('motels')->where('id',$id)->delete();
    }
}
