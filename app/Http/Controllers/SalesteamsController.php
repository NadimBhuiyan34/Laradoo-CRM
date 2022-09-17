<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesteamsController extends Controller
{
    public function salesTeam(){

        return view('Frontend.salesTeams.index');
    }
    public function salesTeamNew(){

        return view('Frontend.salesTeams.create');
    }

}
