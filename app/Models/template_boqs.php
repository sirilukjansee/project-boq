<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class template_boqs extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $tatle = 'template_boqs';
    protected   $fillable = [
        'number_id',
        'project_id',
        'name',
        'date',
        'status',
        'comment',
        'approve_by',
        'approve_at',
        'create_by',
        'update_by'
    ];

    public function project(){
        return $this->hasOne(Project::class,'id','project_id');
    }

}
