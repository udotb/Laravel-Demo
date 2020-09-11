<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendcont extends Controller
{
    public function about(){
        return view('about');
    }
    public function home(){
        return view('home');
    }

    public function crud(){
        return view('crud');
    }

    public function contact(){
        return view('contact');
    }
    public function welcome(){
        return view('welcome');
    }
}
