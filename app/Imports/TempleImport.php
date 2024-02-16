<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\TemplesData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class TempleImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        //
    }

    public function model(array $row)
    {
        \Log::info('Row Data:', $row);
        // dd($row);
        return new TemplesData([
            'temple_location_link'   => $row['temple_location_link'],
            'temple_name'   => $row['temple_name'],
            'rating' => $row['rating'],
            'no_of_reviews'   => $row['no_of_reviews'],
            'type'       => $row['type'],
            'full_address_code'   => $row['full_address_code'],
            'open_status'      => $row['open_status'],
            'timings'      => $row['timings'],
            'temple_image_url'    => $row['temple_image_url'],
        ]);
    }
}
