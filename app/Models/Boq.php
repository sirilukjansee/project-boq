<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boq extends Model
{
    use HasFactory;

    protected   $fillable = [
        'template_boq_id',
        'main_id',
        'sub_id',
        'amount',
        'unit_id',
        'desc',
        'total',
        'create_by',
        'update_by'
    ];
}
