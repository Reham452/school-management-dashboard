<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable =[
        'classroom_id',
        'name',
        'email',
        'phone',
        'specialization'
    ];
    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }
}

