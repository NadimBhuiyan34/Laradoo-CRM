<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        return view('Frontend.index');
    }

    public function mytask(){

        return view('frontend.mytasks');
    }

    public function createtask(){

        return view('frontend.create_task');
    }
}
