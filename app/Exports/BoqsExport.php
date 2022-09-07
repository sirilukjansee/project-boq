<?php

namespace App\Exports;

use App\Models\Boq;
use App\Models\Project;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class BoqsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Project::all();
    }

    public function headings(): array
    {
        return [
            '#',
            'number_id',
            'brand',
            'location',
            'area',
            'unit',
            'io',
            'task_type',
            'task_name',
            'start_date',
            'finish_date',
            'all_date',
            'opendate',
            'desidner',
            'manager',
            'total',
            'create_at',
            'update_at',
            'delete_at',
        ];
    }
}
