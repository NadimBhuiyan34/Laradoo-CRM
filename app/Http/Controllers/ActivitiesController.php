<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivitiesController extends Controller
{
    public function activitiesIndex(){
        return view('Frontend.activities.index');
       }
       public function activitiesCreate(){
        return view('Frontend.activities.create');
       }
}
