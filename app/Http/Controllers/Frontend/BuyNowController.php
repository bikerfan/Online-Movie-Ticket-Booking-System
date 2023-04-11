<?php

namespace App\Http\Controllers\Frontend;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuyNowController extends Controller
{
    public function buynow()
    {
      return view('frontend.pages.buynow');
    }
}
