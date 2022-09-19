<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function tagsIndex(){
        return view('Frontend.tags.index');
       }
       public function tagsCreate(){
        return view('Frontend.tags.create');
       }
}
