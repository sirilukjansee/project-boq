<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class catagory extends Model
{
    use HasFactory;
    use SoftDeletes;

    Protected $table = 'catagories';
    protected $filable = [
        'name',
        'create_by',
        'update_by',
        'is_active',
    ];
    public function catagory_sub(){
<<<<<<< HEAD
        return $this->hasMany(catagory_sub::class,'catagory_id','id');
=======
        return $this->hasMany(catagory_sub::class,'id','catagory_id');
>>>>>>> a6d31ee6768e1e9b5e07b02263f99ede4cf09910
    }
}
