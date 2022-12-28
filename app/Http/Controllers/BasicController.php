<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    //Home page 
    public function Home(){
        return view('frontend/home');
    }

    //About page 
    public function about(){
        return view('frontend/about');
    }

    //Contact page 
    public function Contact(){
        return view('frontend/contact');
    }
}
