<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\course_student;

class Course extends Model
{
    protected $guraded = [];

    public function students(){
        return $this->belongsToMany(Student::class, 'course_students');
    }
}
