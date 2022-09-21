<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadAnalysisController extends Controller
{
    public function leadAnalysis(){
        return view('Frontend.analysis.leads.index');
       }
}
