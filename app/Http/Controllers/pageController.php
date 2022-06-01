<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function home (){
        return view("Home");
    }

    function teams (){
        return view("Teams");
    }

    function aboutus (){
        return view("Aboutus");
    }

    function contact (){
        return view("Contactus");
    }
}
