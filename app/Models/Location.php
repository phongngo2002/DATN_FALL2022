<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    public function getAllLocation()
    {
        return DB::table($this->table)->select(['id', 'latitude', 'longitude'])->get();
    }
}
