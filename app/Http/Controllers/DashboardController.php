<?php

namespace App\Http\Controllers;
use App\Models\major;
use App\Models\course;
use App\Models\courseWaiting;
use App\Models\major_course;
use App\Models\user;
use App\Models\file;
use App\Models\course_file;
use App\Models\fileWaiting;
use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{

    public function dashboard(){
        $sessionData = Auth::user()->collage_id;
        $username = Auth::user()->username;
        $majors = major::where('collage_id', $sessionData)->get();
        $courses = course::where('collage_id', $sessionData)->get();
        $files = file::where('collage_id', $sessionData)->get();
        return view('dashboard', compact('majors','username', 'courses','files'));
    }
    public function AddCourse(Request $Request){
        $NewCourse = new courseWaiting();
        $NewCourse->name = $Request->CourseName;
        $NewCourse->major_id = major::where('name', $Request->majors)->value('id');
        $NewCourse->collage_id = Auth::user()->collage_id;
        $NewCourse->username = Auth::user()->username;
        $NewCourse->save();
        return redirect('dashboard');
    }
    public function DeleteCourse(Request $Request){
        $course = $Request->courses;
        $course_id = course::where('name', $course)->value('id');
        $deleteCourse = course::findOrFail($course_id);
        $Relation = major_course::where('course_id', $course_id)->value('id');
        $deleteRelation = major_course::findOrFail($Relation);
        $deleteRelation->delete();
        $deleteCourse->delete();

        return redirect('dashboard');
    }
    public function Addfile(Request $Request){
        $Newfile = new fileWaiting();
        $Newfile->name = $Request->FileName;
        $Newfile->path = $Request->path;
        $Newfile->course_id = course::where('name', $Request->courses)->value('id');
        $Newfile->username = Auth::user()->username;
        $Newfile->collage_id = Auth::user()->collage_id;
        $Newfile->save();

        return redirect('dashboard');
    }
    public function DeleteFile(Request $Request){
        $Delfile = $Request->input('files');
        $file_id = file::where('name', $Delfile)->value('id');
        $deleteFile = file::findOrFail($file_id);
        $relation = course_file::where('file_id', $file_id)->value('id');
        $deleteRelation = course_file::findOrFail($relation);
        $deleteRelation->delete();
        $deleteFile->delete();

        return redirect('dashboard'); 
    }
}
