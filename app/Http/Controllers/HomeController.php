<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {

        return view('backend.pages.dashboard');
    }

    public function user()
    {

        $data=User::where('role','user')->get();
        // dd($data);
        return view('backend.pages.user',compact('data'));
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
