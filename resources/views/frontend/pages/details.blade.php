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
                {{$movie->name}}
            </div>
        </div>
    </section>
    <!-- End Section -->
    <div class="bg_gray">
        <div class="container">
            <div class="row">

                <div class="col-md-5 col-sm-5 grid_bottom_margin" style="border: 1px solid #0f75bc;">
                    <h3 class="text-center">
                        {{$movie->name}}
                    </h3>
                    <div class="text-center">

                        <img src="{{url('/uploads/'.$movie->image)}}" alt="image." width="310px" height="450px;" class="">
                        </a>
                    </div>
                    <h4 style="margin-bottom:0;" class="uppercase_style text_align_style_center">DIRECTOR</h4>
                    <p style="margin-bottom:0; font-size:15px;" class="text_align_style_center">
                        {{$movie->director}}
                    </p>
                    <h4 style="margin-bottom:0;" class="uppercase_style text_align_style_center">Details</h4>
                    <p style="margin-bottom:0; font-size:15px;" class="text_align_style_center">
                        {{$movie->description}}
                    </p>
                    <h4 style="margin-bottom:0;" class="uppercase_style text_align_style_center">RUNTIME</h4>
                    <p style="margin-bottom:0; font-size:15px;" class="text_align_style_center">
                        {{$movie->duration}}
                    </p>


                    <h4 style="margin-bottom:0;" class="uppercase_style text_align_style_center">Category</h4>
                    <p style="font-size:15px;" class="text_align_style_center">
                        {{$movie->categoryRelation->name}}
                    </p>
                </div>
                <div class="col-md-7 col-sm-7">
                    <br /><br />



                    <!-- End of Amazing Slider Code -->
                    <div class="row" style="border-top:1px solid #f2f2f2; padding:0 0px 25px 0;margin:0 auto; text-align:center;">
                        <a href="#">

                            <img src="https://blockbusterbd.com/uploads/movies/buy_now_button.png">
                        </a>
                    </div>

                    <div class="row" style="border-top:1px solid #f2f2f2; margin-top:0px; padding-left:10px;">






                    </div>
                    <div class="col-md-7 col-sm-7">
                        <form action="https://blockbusterbd.com/add-tickets" method="post" class="buy-padding add-to-cart-ticket">
                            <input type="hidden" name="_token" value="xkC4nPJztfQSVaT1qEhxAcoP7uEwg89PHen4SvbU">
                            <div class="row">

                            @foreach($sobi as $data)
                                <div class="col-md-12">
                                    <h3>Choose your Tickets</h3>
                                    <div class="form-group">
                                        <select class="form-control movie-name buy-ticket" name="movie_id" required="required">
                                            <option value="">Select a Movies</option>
                                            <option  value="{{$data->name}}">{{$data->name}}</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group movie-schedule-info">
                                        <img src="https://blockbusterbd.com/assets/web/css/loader/loader4.gif" alt="loader" class="input-loader">
                                        <select class="form-control movie-schedule buy-ticket" name="movieschedule" required="required">
                                            <option value="">Select Date</option>
                                            <option value="11-04-2023">Tuesday 11th April, 2023</option>
                                            <option value="12-04-2023">Wednesday 12th April, 2023</option>
                                            <option value="13-04-2023">Thursday 13th April, 2023</option>

                                        </select>
                                    </div>

                                    <div class="form-group movie-time-info">
                                        <img src="https://blockbusterbd.com/assets/web/css/loader/loader4.gif" alt="loader" class="input-loader">

                                        <select class="form-control movie-time buy-ticket" name="movietime" required="required">
                                            <option value="">Select Time</option>
                                        </select>
                                    </div>

                                    <div class="form-group movie-seat-category-info">
                                        <img src="https://blockbusterbd.com/assets/web/css/loader/loader4.gif" alt="loader" class="input-loader">
                                        <select class="form-control movie-seat-category movie-ticket-price" name="movie_seat_category" required="required">
                                            <option value="">Select Seat Category</option>
                                        </select>
                                    </div>

                                    <div class="form-group movie-ticket-number-info">
                                        <img src="https://blockbusterbd.com/assets/web/css/loader/loader4.gif" alt="loader" class="input-loader">
                                        <select class="form-control movie-ticket-number movie-ticket-price" name="movie_ticket_number" required="required">
                                            <option value="">No. of Tickets</option>

                                            <option value="1">01</option>

                                            <option value="2">02</option>

                                            <option value="3">03</option>

                                            <option value="4">04</option>

                                            <option value="5">05</option>

                                            <option value="6">06</option>

                                            <option value="7">07</option>

                                            <option value="8">08</option>

                                            <option value="9">09</option>

                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="manage-ticket-price">
                                        <div class="alert alert-success manage-ticket-success" role="alert">
                                            <p class="manage-movie-price"> Ticket Price : <b class="m-price"></b></p>
                                        </div>
                                        <div class="alert alert-danger manage-ticket-failed" role="alert"></div>
                                    </div>


                                    <button type="submit" name="Next" class="btn btn-danger  add-to-cart-ticket-btn"> Next </button>

                                </div>
                                @endforeach
                            </div>


                            <!-- End row-->

                    </div>
                    <br />
                </div>
            </div>
            <!-- End container -->
        </div>
    </div>
    <!-- End container -->
    </footer>
    <!-- End footer -->
</div>
@section('content')



@endsection