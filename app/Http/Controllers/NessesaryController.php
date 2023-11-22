<?php

namespace App\Http\Controllers;
use App\Models\nessesary_course;
use App\Models\nessesary_file;
use App\Models\course_file_nessesary;
use Illuminate\Http\Request;

class NessesaryController extends Controller
{
    public function nessesary() {

        $courses = nessesary_course::all();
        $files = nessesary_file::all();
        $relation = course_file_nessesary::all();
        return view('nessesary', compact('courses','files','relation'));
        
    }
}
