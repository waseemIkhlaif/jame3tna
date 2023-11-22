<?php

namespace App\Http\Controllers;
use App\Models\collage;
use Illuminate\Http\Request;

class CollageController extends Controller
{
    public function collage() {
        $collageResult = collage::all();
        return view('collages' , ['collage' => $collageResult]);
    }
}
