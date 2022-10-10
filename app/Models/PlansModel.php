<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlansModel extends Model
{
    use HasFactory;
    protected $table = 'Plans';

    //lấy các trường trong các data 
    protected $fillable = [
        'id',
        'name',
        'desc',
        'priority_level',
        'type',
        'time',
        'price',
        'created_at'
    ];
}