<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function teamsIndex(){
        return view('Frontend.teams.index');
       }
       public function teamsCreate(){
        return view('Frontend.teams.create');
       }
}
