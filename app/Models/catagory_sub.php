<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class catagory_sub extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [

        'catagory_id',
        'name',
        'create_by',
        'update_by',
        'is_active'
    ];
}
