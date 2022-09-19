<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RdashboardController extends Controller
{
    public function rdashboardIndex(){
        return view('Frontend.analysis.rdashboard');
       }
 
}
