<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home page 

    public function getHome(){
        return view('home');
    }

    
    // About page 

    public function getAbout(){
        return view('about');
    }

    
    // Contact page 

    public function getContact(){
        return view('contact');
    }

    // get resturant 
    public function getResturant(){
        return view('resturant');
    }
}
