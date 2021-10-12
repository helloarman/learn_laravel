<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linksite extends Controller
{
    public function index(){
        return view('home');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function contact(){
        return view('contact');
    }

    public function posts(){
        return view('posts');
    }
    
}

