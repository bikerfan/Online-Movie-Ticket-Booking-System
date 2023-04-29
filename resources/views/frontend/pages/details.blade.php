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




                    <div class="row" style="border-top:1px solid #f2f2f2; margin-top:0px; padding-left:10px;">






                    </div>
                    <div class="col-md-7 col-sm-7">
                        <form action="{{route('buy.now')}}" method="post" class="buy-padding add-to-cart-ticket">
                            @csrf

                            <div class="row">

                                <div class="col-md-12">
                                    <h3>Choose your Tickets</h3>
                                    <div class="form-group">
                                        <select class="form-control movie-name buy-ticket" name="name" required="required">
                                            <option value="">Select a Movies</option>
                                            @foreach($sobi as $data)
                                            <option value="{{$data->name}}" @if(\request()->movie_id == $data->id) selected @endif>{{$data->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group movie-schedule-info">
                                        <img src="https://blockbusterbd.com/assets/web/css/loader/loader4.gif" alt="loader" class="input-loader">
                                        <select class="form-control movie-schedule buy-ticket" name="date" required="required">
                                            <option value="">Select Date</option>
                                            @foreach($schedule as $data)
                                            <option value="{{$data->date}}">{{$data->date}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group movie-time-info">
                                        <img src="https://blockbusterbd.com/assets/web/css/loader/loader4.gif" alt="loader" class="input-loader">

                                        <select class="form-control movie-time buy-ticket" name="time" required="required">
                                            <option value="time">Select Time</option>
                                            <option value="9am-12pm">9am-12pm</option>
                                            <option value="3pm-6pm">3pm-6pm</option>
                                            <option value="7pm-10pm">7pm-10pm</option>
                                        </select>
                                    </div>

                                    <div class="form-group movie-seat-category-info">
                                        <img src="https://blockbusterbd.com/assets/web/css/loader/loader4.gif" alt="loader" class="input-loader">
                                        <select class="form-control movie-seat-category movie-ticket-price" name="seat" required="required">
                                            <option value="">Select Seat Category</option>
                                            <option value="E Front">E Front</option>
                                            <option value="E Rear">E Rear</option>
                                        </select>
                                    </div>

                                    <div class="form-group movie-ticket-number-info">
                                        <img src="https://blockbusterbd.com/assets/web/css/loader/loader4.gif" alt="loader" class="input-loader">
                                        <select class="form-control movie-ticket-number movie-ticket-price" name="ticket" required="required">
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


                                    <button type="submit" class="btn btn-info"> BUY NOW </button>

                                </div>

                            </div>
                        </form>

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