<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    // protected $table = 'Plans';

    //lấy các trường trong các data
    protected $fillable = [
        'id',
        'name',
        'desc',
        'priority_level',
        'type',
        'time',
        'price',
        'created_at',
        'status'
    ];

    public function list()
    {
        $plans = new Plans;
        return $plans->select($this->fillable)->where('status', '!=', 0)->orderBy('id', 'desc')->paginate(5);
    }

    public function show_plans($id)
    {
        $plans = new Plans;
        $data = $plans->select($this->fillable)->find($id);
        return $data;
    }
}
