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
                    'room_number' => $row[0],
                    'price' => $row[1],
                    'area' => $row[2],
                    'area_id' => $this->id,
                    'description' => $row[3],
                    'image_360' => $row[4],
                    'photo_gallery' => $row[5],
                    'status' => 1,
                    'max_people' => $row[6],
                    'video' => $row[9],
                    'services' => json_encode([
                        'bed' => $row[10],
                        'bedroom' => $row[11],
                        'toilet' => $row[12],
                        'more' => $row[13],
                        'actor' => $row[14]])
                ]);
            }
        }
    }
}
