<?php

namespace App\Http\Controllers;

use App\Models\ShowTime;
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
    public function schedule()
    {
        $time=ShowTime::all();
        // dd($time);
        return view('backend.pages.schedule-list',compact('time'));
    }
    public function create()
    {

        return view('backend.pages.schedule-create');
    }
    public function store(Request $request)
    {
    //    dd($request->all());
        // $request->validate(['category_name'=>'required|unique:category_controllers,name',]);

        ShowTime::create([
            //database column name => input field name
                'date'=>$request->date,
                'status'=>$request->status,
                'time'=>$request->time,
                "seat" =>$request->seat
        ]);

//        return redirect()->route('category.list');
notify()->success('Schedule Created successfully.');

        return redirect()->route('schedule');

    }
    public function delete($id){
        Showtime::find($id)->delete();
        return redirect()->back();
    }

}
