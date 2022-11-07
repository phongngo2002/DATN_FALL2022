<?php

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Area extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'areas';

    public function admin_get_list_area($params = [])
    {
        $params['order_by'] = $params['order_by'] ?? 'desc';
        $params['name'] = $params['name'] ?? '';
        $params['limit'] = $params['limit'] ?? 5;
        $query = DB::table($this->table)->where('user_id', Auth::id())->where('status', '!=', 0);

        if ($params['name']) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }
        return $query
            ->orderBy('id', $params['order_by'])
            ->paginate($params['limit']);
    }

    public function admin_create_area($params = [])
    {
        $result = DB::table($this->table)->insert([
            'name' => $params['cols']['name'],
            'address' => $params['cols']['address'],
            'link_gg_map' => $params['cols']['link_gg_map'],
            'user_id' => Auth::id(),
            'created_at' => Carbon::now(),
            'img' => $params['cols']['img']
        ]);

        return $result;
    }

    public function getArea($id)
    {
        return DB::table($this->table)->where('id', $id)->first();
    }

    public function admin_update_area($params = [])
    {
        $result = DB::table($this->table)->where('id', $params['cols']['id'])->update([
            'name' => $params['cols']['name'],
            'address' => $params['cols']['address'],
            'link_gg_map' => $params['cols']['link_gg_map'],
            'img' => $params['cols']['img']
        ]);

        return $result;
    }

    public function adminDeteletArea($id)
    {
        DB::table($this->table)->where('id', $id)->update(['status' => 0]);
    }

    public function client_Get_List_Top_Area()
    {

        $res = DB::table('areas')->select(['areas.id', 'areas.name', 'areas.img as image', 'areas.address', DB::raw('COUNT(motels.area_id) as quantity')])
            ->join('motels', 'areas.id', '=', 'motels.area_id')
            ->join('plan_history', 'motels.id', '=', 'plan_history.motel_id')
            ->where('plan_history.status', 1)
            ->limit(8)
            ->orderByDesc('quantity')
            ->groupBy('areas.name', 'areas.address', 'areas.id', 'image')
            ->get();
        return $res;
    }
}