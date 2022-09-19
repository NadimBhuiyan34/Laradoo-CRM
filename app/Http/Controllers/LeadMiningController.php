<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadMiningController extends Controller
{
    public function leadMiningIndex(){
        return view('Frontend.lead_mining.index');
       }
       public function leadMiningCreate(){
        return view('Frontend.lead_mining.create');
       }
}
