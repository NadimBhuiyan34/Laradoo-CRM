<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadsController extends Controller
{
    public function leadsIndex(){
        return view('Frontend.leads.index');
       }
       public function leadsCreate(){
        return view('Frontend.leads.create');
       }
}
