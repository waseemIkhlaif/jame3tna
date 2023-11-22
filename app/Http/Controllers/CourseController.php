<?php

namespace App\Http\Controllers;
use App\Models\course;
use App\Models\course_file;
use App\Models\file;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses($course_id){
        $courses = course_file::where('course_id', $course_id)->get('file_id');
        $files = file::all();
        $courseName = course::where('id', $course_id)->value('name');
        return view('courses' , compact('courses', 'files','courseName'));
    }
}
