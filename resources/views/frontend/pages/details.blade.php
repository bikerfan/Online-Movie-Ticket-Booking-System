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

                <div class="col-md-9 col-sm-5 grid_bottom_margin" style="border: 1px solid #0f75bc;">
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
                <div class="col-md-3 col-sm-7">
                    <br /><br />



                    <!-- End of Amazing Slider Code -->
                    <div class="row" style="border-top:1px solid #f2f2f2; padding:0 0px 25px 0;margin:0 auto; text-align:center;">
                        <a href="#">
                            <img src="https://blockbusterbd.com/uploads/movies/buy_now_button.png">
                        </a>
                    </div>

                    <div class="row" style="border-top:1px solid #f2f2f2; margin-top:0px; padding-left:10px;">






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