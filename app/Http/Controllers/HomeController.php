<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function login()
    {
        return view('backend.pages.login');
    }

    public function doLogin(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }

        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)) {
            notify()->success('Login Success');
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('Invalid Credentials');
    }
    public function logout()
    {
        auth()->logout();
        // notify()->success('Logout Success.');
        return redirect()->route('login')->with('Logout Success.');
    }
}
