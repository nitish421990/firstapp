<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students= Student::get();

        foreach($students as $student){
     echo $student->name."<br>";
     echo $student->email."<br>";

     foreach($student->courses as $course){
        echo $course->name."<br>";
     }
     echo "----------<br>";
        }
        // return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student=Student::find(1);
        $course=[5,6];
        // $student->courses()->attach($course);

        $student->courses()->sync($course);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
