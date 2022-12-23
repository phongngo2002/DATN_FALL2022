<?php

namespace App\Imports;

use App\Models\Motel;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MotelsImport implements ToCollection
{
    private $id;

    public function __construct($area_id)
    {
        $this->id = $area_id;
    }

    public
    function collection(Collection $rows)
    {
        foreach ($rows as $index => $row) {
            if ($index > 0) {
                Motel::create([
                    'room_number' => $row[1],
                    'price' => $row[2],
                    'area' => $row[3],
                    'area_id' => $this->id,
                    'description' => $row[5],
                    'image_360' => $row[6],
                    'photo_gallery' => $row[7],
                    'status' => 1,
                    'max_people' => $row[9],
                    'video' => $row[14],
                    'services' => $row[12],
                    'category_id' => $row[13]
                    , 'data_post' => '',
                    'electric_money' => $row[16],
                    'warter_money' => $row[17],
                    'wifi' => $row[18],
                    'money_deposit' => $row[19],
                    'day_deposit' => $row[20],
                    'transfer_infor' => $row[21]
                ]);
            }
        }
    }
}
