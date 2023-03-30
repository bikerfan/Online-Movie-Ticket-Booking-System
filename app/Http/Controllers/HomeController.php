<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        
        return view('backend.master');
    }

    public function user()
    {
       
        return view('backend.fixed.user');
    }
    public function movie_list()
    {
    //    dd('hi');
        return view('backend.pages.movie.movie_list');
    }
    

}