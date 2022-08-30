<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unit extends Model
{
    use HasFactory;
<<<<<<< HEAD
    use SoftDeletes;
=======
    // use SoftDeletes;
>>>>>>> a6d31ee6768e1e9b5e07b02263f99ede4cf09910

    protected   $fillable = [
        'unit_name',
        'create_by',
        'update_by'
    ];
}
