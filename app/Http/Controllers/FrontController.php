<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function about () {

        return view('about-us');
    }

    public function contact () {
        
        return view('contact-us');
    }

    public function services () {
        
        return view('services');
    }
}
