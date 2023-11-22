<?php

namespace App\Http\Controllers;
use App\Models\courseWaiting;
use App\Models\major;
use App\Models\course;
use App\Models\major_course;
use App\Models\fileWaiting;
use App\Models\file;
use App\Models\course_file;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){

        $courses = courseWaiting::all();
        $majors = major::all();
        $files = fileWaiting::all();
        $courseName = course::all();
        return view('AdminDashboard', compact('courses', 'majors', 'files','courseName'));
    }
    public function Accept($id){
        $courseName = courseWaiting::where('id', $id)->value('name');
        $collage_id = courseWaiting::where('id', $id)->value('collage_id');
        $major_id = courseWaiting::where('id', $id)->value('major_id');
        $NewCourse = new course();
        $NewCourse->name = $courseName;
        $NewCourse->collage_id = $collage_id;
        $NewCourse->save();
        
        $course_id = course::where('name', $courseName)->value('id');
        $NewRelation = new major_course();
        $NewRelation->major_id = $major_id;
        $NewRelation->course_id = $course_id;
        $NewRelation->save();
        $courseDelete = courseWaiting::findOrFail($id);
        $courseDelete->delete();

        return redirect()->route('AdminDashboard');
    }
    public function DeleteOrder($id){
        $deleteOrder = courseWaiting::findOrFail($id);
        $deleteOrder->delete();

        return redirect()->route('AdminDashboard');
    }
    public function Acceptfile($id){
        $fileName = fileWaiting::where('id', $id)->value('name');
        $path = fileWaiting::where('id', $id)->value('path');
        $collage_id = fileWaiting::where('id', $id)->value('collage_id');
        $Newfile = new file();
        $Newfile->name = $fileName;
        $Newfile->path = $path;
        $Newfile->collage_id = $collage_id;
        $Newfile->save();
        
        $file_id = file::where('name', $fileName)->value('id');
        $course_id = fileWaiting::where('id', $id)->value('course_id');
        $NewRelation = new course_file();
        $NewRelation->course_id = $course_id;
        $NewRelation->file_id = $file_id;
        $NewRelation->save();

        $fileDelete = fileWaiting::findOrFail($id);
        $fileDelete->delete();

        return redirect()->route('AdminDashboard');
    }
    public function DeleteFileOrder($id){
        $deleteOrderFile = courseWaiting::findOrFail($id);
        $deleteOrderFile->delete();
    }
}
