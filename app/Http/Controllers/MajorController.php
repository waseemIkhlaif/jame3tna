<?php

namespace App\Http\Controllers;
use App\Models\major;
use App\Models\collage;
use App\Models\course;
use App\Models\major_course;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function majors($collage_id) {
        $majorResult = major::where('collage_id', $collage_id)->get();
        $CollageName = collage::where('id', $collage_id)->value('name');
        $courses = course::all();
        $data = major_course::all();
        return view('majors', compact('majorResult','courses','data','CollageName'));
    }
}
