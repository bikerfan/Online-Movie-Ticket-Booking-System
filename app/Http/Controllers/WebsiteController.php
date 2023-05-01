<?php

namespace App\Http\Controllers;

use App\Models\BuyNow;
use App\Models\Movie;
use App\Models\User;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    public function web()
    {

        $up=Movie::all();
        return view('frontend.pages.home',compact('up'));
    }

    public function weblogin()
    {

        return view('frontend.pages.login');
    }
    
    public function websitelogin(Request $request)
    {
                // dd($request->all());

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
            return redirect()->route('webhome');
        }
        notify()->error('Login fail,Invalid Credentials');
        return redirect()->back();
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
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' =>'user',
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
    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Success.');
        return redirect()->route('webhome')->with('Logout Success.');
    }
    
    public function upcomming()
    {
        $up=Movie::where('status','inactive')->with('categoryRelation')->get();
        // dd($up);
        return view('frontend.pages.upcomming',compact('up'));
    }
    public function nowshowing()
    {
        $up=Movie::where('status','active')->with('categoryRelation')->get();
        // dd($up);
        return view('frontend.pages.nowshowing',compact('up'));
    }
    public function details($movie_id)
    {
        $movie=Movie::find($movie_id);
        $sobi=Movie::all();
        // dd($movie);

       $schedule = ShowTime::whereDate("date", ">=", now())->get();
    //    dd($schedule);
        return view('frontend.pages.details',compact('movie','sobi',"schedule"));
    }

    public function profile()
    {
        $BookingInfo = BuyNow::orderBy('id','desc')->where('user_id', auth()->user()->id)->get(); 
        return view('frontend.pages.profile', compact('BookingInfo'));
    }
    public function updateProfile(Request $request)
    {
       //validation

        $user=User::find(auth()->user()->id);
        $user->update([
           'name'=>$request->name,
           'phone'=>$request->phone,
        ]);

        notify()->success('User profile updated.');
        return redirect()->back();
    }
    public function price()
    {
        return view('frontend.pages.price');
        // dd('Ticket Price');
    }
    public function schedule_list()
    {
        return view('frontend.pages.schedule-list');
        // dd('Ticket Price');
    }

    public function bookingDetails(){


        return redirect()->route('frontend.pages.profile');


    }
public function OrderStore(Request $request){

    //dd($request->all());

     BuyNow::create([
        'name'=>$request->name,
        "user_id" => auth()->user()->id,
        'date'=>$request->date,
        'time'=>$request->time,
        'seat'=>$request->seat,
        'ticket'=>$request->ticket,
        'transaction_id'=>$request->transaction_id,
        'price'=>$request->pice,
        'status'=>$request->status


    ]);
   
    return redirect()->back();
  



}
public function single_view($id)
{
    // $BookingInfo = BuyNow::where('user_id', auth()->user()->id)->get(); 
    $data=BuyNow::find($id);
    // dd($data);


    return view('frontend.pages.singleview',compact('data'));

}


}
