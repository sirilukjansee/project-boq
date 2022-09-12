<?php

namespace App\Imports;

use App\Models\Brand;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Brand([
            'code' => $row['code'],
            'brand_name' => $row['brand_name'],
            // "is_active" => $row['is_active'],
            'create_by' => 2,
            'update_by' => 2,
        ]);
    }
}
