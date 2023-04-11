@extends('frontend.master')


@section('content')

<body>
    <div class="loaderwhole">
        <div class="centerload"></div>
    </div>
    <!--[if lte IE 8]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
   <![endif]-->
    <!--<div id="preloader">
         <div class="sk-spinner sk-spinner-wave">
             <div class="sk-rect1"></div>
             <div class="sk-rect2"></div>
             <div class="sk-rect3"></div>
             <div class="sk-rect4"></div>
             <div class="sk-rect5"></div>
         </div>
      </div>-->
    <!-- End Preload -->
    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->


    <div class="background-banner">
        <div class="body_left">
            <img class="lazy" src="https://blockbusterbd.com/uploads/slider_image/14423323291678977285.jpg" alt="">
            <img class="lazy" src="https://blockbusterbd.com/uploads/slider_image/1931386791660919086.jpg" alt="">
        </div>
        <div class="body_right">
            <img class="lazy" src="https://blockbusterbd.com/uploads/slider_image/9083816461676966692.jpg" alt="">
            <img class="lazy" src="https://blockbusterbd.com/uploads/slider_image/14229659081660919100.jpg" alt="">
        </div>
    </div>


    <div id="boxed">
        <!-- Boxed container --><!-- Header================================================== -->
   
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

                </div>
            </div>
        </section>

        <!-- start slider-->
        
        <!-- end slider-->

        <div class="container">

            
            <div class="row">
                <div class="col-md-4" id="strip_activities">
                    <h2><a href="https://blockbusterbd.com/next-arrival">Now Showing</a></h2>
                    <div class="row">
                        @foreach($up as $coming)
                        <div class="col-lg-6 col-md-12 col-sm-6">
                            <section class="box_cat_wp">
                                <div class="box_cat cat-hover">
                                    <a class="cat-overlay" href="{{route('details',$coming->id)}}">
                                    </a>
                                    <div class="cat-img" style="display: block;">
                                        <img class="" alt="" src="{{url('/uploads/'.$coming->image)}}">
                                        
                                    </div>
                                </div>
                            </section>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
                
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->


        <div id="toTop"></div>
        <div id="single_room_feat">
            <div class="single-room-title" style="background:#0f75bc; padding:0;">
                <h3 style=" color:#FFF;font-family: 'Gochi Hand', cursive;
                  line-height: 1.42857143; font-size:30px;padding: 0 15px">Our Partners</h3>
            </div>

            <div class="single-body">
                <ul>
                    <!--                      <li><img src="https://blockbusterbd.com/assets/web/img/partner.png"></li>
                     <li><img src="https://blockbusterbd.com/assets/web/img/partner.png"></li>
                     <li><img src="https://blockbusterbd.com/assets/web/img/partner.png"></li>
                     <li><img src="https://blockbusterbd.com/assets/web/img/partner.png"></li> -->
                </ul>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-6 text-center">
                        <h2>We accept</h2>
                        <img src="https://blockbusterbd.com/assets/web/img/credit-cards-logos-200px-high-WEB.png" style="max-height: 60px; max-width: 300px;">
                    </div>

                    <div class="col-md-9 col-sm-6">
                        <h1>Contacts</h1>
                        <ul id="contact_details_footer">
                            <!--<li><b>Blockbuster Cinemas</b></li>
                           <li>Ka- 244, Pragati Avenue, Kuril, Dhaka<br> Bangladesh <br></li>
                           <li><a href="tel://+88-02-8413768">+88-02-8413768</a> / <a href="tel://+88-02-8413766">+88-02-8413766</a></li>
                           <li><a href="mailto:customercare@blockbusterbd.com">customercare@blockbusterbd.com</a></li>-->
                        </ul>
                        <h2> Online Movie Ticket</h2>
                        <!--<ul id="single_room_feat">
                        <li><a href="contest.php">Contest</a> || </li>
                        <li><a href="inside_blockbuster.php">Inside Blockbuster </a> || </li>
                        <li><a href="terms_conditions.php">Term & Conditions</a></li>
                        <li><a href="home.php">My Account</a></li>
                     </ul>-->
                        <h3>Customer Care</h3>
                        <ul>
                            <li>customercare@onlinemovieticket.com</li>
                        </ul>

                        <p><span style="font-size:18px"><a href="javascript:void(0)"><span style="color:#ffff99">01642046852</span></a></p>
                <p><span style="font-size:18px"><a href="javascript:void(0)"><span style="color:#ffff99">01962836771</span></a></p>
                    </div>


                </div>
                <!-- End row -->
                <div class="row">
                    <div class="col-md-12">
                        <div id="social_footer">


                            <p>
                                &copy; 2023 Online Movie Ticket All rights reserved. Design &amp; Developed By
                                <a target="_blank" href="#">Kowsar</a>
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
    <!-- End Boxed container -->
    <!-- End footer -->
    </div>
    <!-- End Boxed container -->
    <div id="toTop"></div>
    <!-- Back to top button -->
    <!-- Common scripts -->
    <script src="https://blockbusterbd.com/assets/web/js/jquery-1.11.2.min.js"></script>
    <script src="https://blockbusterbd.com/assets/web/js/common_scripts_min.js"></script>
    <script src="https://blockbusterbd.com/assets/web/js/functions.js"></script>
    <script src="https://blockbusterbd.com/assets/web/assets/validate.js"></script>
    <script src="https://blockbusterbd.com/assets/web/js/jquery-ui.js"></script>
    <script src="https://blockbusterbd.com/assets/web/js/jquery.lazy.min.js"></script>




    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="https://blockbusterbd.com/assets/web/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="https://blockbusterbd.com/assets/web/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="https://blockbusterbd.com/assets/web/js/revolution_func.js"></script>

    <!-- Specifi scripts -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> -->
    <!-- <script type="text/javascript" src="https://blockbusterbd.com/assets/web/js/mapmarker.jquery.js"></script> -->
    <!-- <script type="text/javascript" src="https://blockbusterbd.com/assets/web/js/mapmarker_func.jquery.js"></script> -->

    <!----BlockBuster Slider------------->
    <!---If this is activated the Pop up youtube video will not work----
         <script type="text/javascript" src="slider_blockbuster/js/jquery-1.js"></script>
         --->
    <script type="text/javascript" src="https://blockbusterbd.com/assets/web/slider_blockbuster/js/modernizr.js"></script>
    <script type="text/javascript" src="https://blockbusterbd.com/assets/web/slider_blockbuster/js/jquery.js"></script>
    <!-- Specifi scripts -->
    <script src="https://blockbusterbd.com/assets/web/js/mosaic.1.0.1.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $('.cat-hover').mosaic({
                animation: 'slide' //fade or slide
            });
        });
    </script>



    <script type="text/javascript">
        $('.lazy').lazy();
    </script>

</body>

</html>

@endsection