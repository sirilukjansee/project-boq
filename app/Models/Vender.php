<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vender extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected   $fillable = [
        'first_name',
        'last_name',
        'create_by',
        'update_by'
    ];

    protected $guarded = [];

}
