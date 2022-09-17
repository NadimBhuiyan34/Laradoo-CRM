<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotationController extends Controller
{
    //
    public function quotationIndex(){
        return view('Frontend.quotations.index');
       }
       public function quotationCreate(){
        return view('Frontend.quotations.create');
       }
}
