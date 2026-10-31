<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\course_student;

class Student extends Model
{
    protected $guraded = [];

    public function courses(){
        return $this->belongsToMany(Course::class, 'course_students');
    }
}
