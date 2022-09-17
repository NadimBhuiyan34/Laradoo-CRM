<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function customerIndex(){
    return view('Frontend.customers.index');
   }
   public function customerCreate(){
    return view('Frontend.customers.create');
   }
}
