<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    public function web()
    {

        return view('frontend.pages.home');
    }

    public function weblogin()
    {

        return view('frontend.pages.login');
    }
    public function dologin(Request $request)
    {
                dd($request->all());

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
            return redirect()->back();
        }
        return redirect()->back()->with('Invalid Credentials');
    }
    public function webregistration()
    {

        return view('frontend.pages.registration');
    }
    public function doregistration(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            notify()->error($validate->getMessageBag());
            return redirect()->back();
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->contact_no,
            'password' => bcrypt($request->password),
            'password_confirmation' => bcrypt($request->password_confirmation),
        ]);
        notify()->success('customer registration success');
        return redirect()->back()->with('message', 'Registration Success.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->except('_token');
        if (auth('customer')->attempt($credentials)) {
            notify()->success('Login success');
            return redirect()->back();
        }
        notify()->error('invalid password');
        return redirect()->back();
    }
}