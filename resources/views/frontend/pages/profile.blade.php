@extends('frontend.master')

<div id="boxed">
    <div class="body_left"></div>
    <div class="body_right"></div>

    <!-- <section class="sub_header" id="bg_general">
            <div class="sub_header_content">
               <div class="animated fadeInDown">

               </div>
            </div>
         </section> -->
    <!-- End Section -->


    <section class="sub_header" id="bg_general">
        <div class="sub_header_content">
            <div class="animated fadeInDown">
                Upcoming Movies
            </div>
        </div>
    </section>
    <!-- End Section -->
    <style type="text/css">
        .h5,
        h5 {
            font-size: 14px;
            height: 20px;
    </style>
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">{{auth()->user()->name}}</span>
                <span class="text-black-50">{{auth()->user()->email}}</span>

            </div>
        </div>
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form action="{{route('profile.update')}}" method="post">

                    @method('put')
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Name" value="{{auth()->user()->name}}">
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label><input name="phone" type="text" class="form-control" placeholder="enter phone number" value="{{auth()->user()->phone}}"></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input readonly type="text" class="form-control" placeholder="enter email id" value="{{auth()->user()->email}}"></div>
                    </div>

                    <div class="mt-5 text-center">
                    <a class="btn btn-primary profile-button" href="{{route('webhome')}}">Back</a>
                        <button class="btn btn-primary profile-button" type="submit">Update Profile</button>

                    </div>
                </form>


            </div>
        </div>

    </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div id="social_footer">


                <p>
                    &copy; 2021 Blockbuster Cinemas All rights reserved. Design &amp; Developed By
                    <a target="_blank" href="#">Electro CRAFT Corporation Ltd</a>
                    <br /><span style="font-size:10px; color:#000;">No part of this website may be reproduced in any form without our written permission. We may take all necessary legal actions against users who infringe or repeatedly infringe our copyrights or other intellectual property rights. </span>
                </p>
                <br />

            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End container -->
</footer>
<!-- End footer -->
</div>
@section('content')



@endsection

