<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadRulesController extends Controller
{
    public function leadRulesIndex(){
        return view('Frontend.lead_rules.index');
       }
       public function leadRulesCreate(){
        return view('Frontend.lead_rules.create');
       }
}
