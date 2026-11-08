<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //
    protected $fillable =['name','description','capacity'];
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
}