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
    <div class="bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--  Tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#all">All</a></li>

                        <!--<li><a data-toggle="tab" href="#IRIS">IRIS</a></li>-->
                        <!--<li><a data-toggle="tab" href="#MONTAGE">MONTAGE</a></li>-->
                        <!--<li><a data-toggle="tab" href="#THRILL">THRILL</a></li>-->
                        <!--<li><a data-toggle="tab" href="#EXPOSURE">EXPOSURE</a></li>-->
                        <!--<li><a data-toggle="tab" href="#TRANSITION">TRANSITION</a></li>-->
                        <!--<li><a data-toggle="tab" href="#CLUB ROYALE">CLUB ROYALE</a></li>-->
                        <!--<li><a data-toggle="tab" href="#UTSHOB">UTSHOB</a></li>-->
                    </ul>
                    <div class="tab-content">
                        <div id="all" class="tab-pane active">
                            <div class="row showing-v2">
                                @foreach($up as $coming)
                                <div class="col-md-3 col-sm-4 grid_bottom_margin">


                                    <h5 class="text_align_style_center">
                                        {{$coming->name}}
                                    </h5>
                                    <div class="border_style_for_image">
                                        <a href="#">
                                            <img class="lazy" alt="" src="{{url('/uploads/'.$coming->image)}}" width="213px" height="309px;">
                                        </a>
                                    </div>
                                    <h6 class="uppercase_style text_align_style_center" style="margin-bottom:0;">Category</h6>
                                    <p class="text_align_style_center" style="margin-bottom:0;height: 41px;overflow: hidden;">
                                        {{$coming->categoryRelation->name}}
                                    </p>
                                    <h6 class="uppercase_style text_align_style_center" style="margin-bottom:0;">Details</h6>
                                    <p class="text_align_style_center" style="margin-bottom:0;height: 41px;overflow: hidden;">
                                        {{$coming->description}}
                                    </p>
                                    <p class="text_align_style_center" style="margin-bottom:0;height: 35px;overflow: hidden;">
                                        <a class="btn_1" href="{{route('details',$coming->id)}}">MORE</a> </p>
                                </div>
                                @endforeach



                            </div>
                        </div>

                    </div>
                </div>
                <!-- End col-md-12-->
            </div>
        </div>
        <!-- End container -->
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