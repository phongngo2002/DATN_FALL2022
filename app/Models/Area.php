<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';

    public function admin_get_list_area($params = [])
    {
        $params['order_by'] = $params['order_by'] ?? 'desc';
        $params['name'] = $params['name'] ?? '';
        $params['limit'] = $params['limit'] ?? 10;
        $query = DB::table($this->table);

        if ($params['name']) {
            $query->where('name', 'like', '%' . $params['name'] . '%');
        }
        return $query
            ->orderBy('id', $params['order_by'])
            ->paginate($params['limit']);
    }
}
