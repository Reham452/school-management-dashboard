<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable =[
        'classroom_id',
        'name',
        'email',
        'birth_date',
        'phone'
    ];
    public function classroom(){
        return $this->belongsTo(Classroom::class);
    }
}
