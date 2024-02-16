<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\LocationPincode;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PincodeImport implements ToModel, WithHeadingRow
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
        return new LocationPincode([
            'circle_name'   => $row['circle_name'],
            'region_name'   => $row['region_name'],
            'division_name' => $row['division_name'],
            'office_name'   => $row['office_name'],
            'pincode'       => $row['pincode'],
            'office_type'   => $row['office_type'],
            'delivery'      => $row['delivery'],
            'district'      => $row['district'],
            'state_name'    => $row['state_name'],
        ]);
    }
}
