<?php

namespace App\Exports;

use App\Models\Boq;
use App\Models\Project;
use App\Models\template_boqs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class BoqsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return template_boqs::all();
    }


}
