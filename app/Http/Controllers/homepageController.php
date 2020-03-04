<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class homepageController extends Controller
{
    public function __construct()
   {
        $this->middleware('auth');
   }

   public function frontview()
   {
    return view('header.homepage');

   }

}
