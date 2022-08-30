<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;

    protected   $fillable = [
        'brand',
        'location',
        'area',
        'unit',
        'io',
        'task',
        'task_n',
        'start_date',
        'finish_date',
        'all_date',
        'open_date',
        'designer_name',
        'project_manager',
        'total'
    ];
}
