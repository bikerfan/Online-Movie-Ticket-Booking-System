<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function web(){
        return view('frontend.pages.home');



    }

    public function weblogin(){
        return view('frontend.pages.login');



    }
    public function webregistration(){
        return view('frontend.pages.registration');



    }
}
