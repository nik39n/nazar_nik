<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;

class ImagesController extends Controller
{
    public function img(){
        $images = Images::all();
         return view('img', compact('images'));
    }
   
}
