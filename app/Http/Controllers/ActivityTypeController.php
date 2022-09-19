<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityTypeController extends Controller
{
    public function activityTypeIndex(){
        return view('Frontend.activity_type.index');
       }
       public function activityTypeCreate(){
        return view('Frontend.activity_type.create');
       }
}
