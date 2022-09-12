<?php

namespace App\Imports;

use App\Models\Brand;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Brand([
            "brand_name" => $row['brand_name'],
            "is_active" => $row['is_active'],
            // "create_by" => $row['create_by'],
            // "update_by" => $row['update_by'],
        ]);
    }
}
