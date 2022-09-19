<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LostreasonController extends Controller
{
   
    public function lostreasonIndex(){
        return view('Frontend.lostreason.index');
       }
       public function lostreasonCreate(){
        return view('Frontend.lostreason.create');
       }
}
