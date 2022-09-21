<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForecastController extends Controller
{
    public function forecastIndex(){
        return view('Frontend.analysis.forecast.index');
       }
}
