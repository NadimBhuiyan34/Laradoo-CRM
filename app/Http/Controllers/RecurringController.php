<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecurringController extends Controller
{
    public function recurringIndex(){
        return view('Frontend.recurring.index');
       }
       public function recurringCreate(){
        return view('Frontend.recurring.create');
       }
}
