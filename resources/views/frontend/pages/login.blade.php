@extends('frontend.master')


@section('content')
<div id="boxed">
    <section class="sub_header" id="bg_general">
        <div class="sub_header_content">
            <div class="animated fadeInDown">
                Login

            </div>
        </div>
    </section>

    <body class="bg-gradient-primary">
        <div class="bg_gray">
            <div class="container">
                <!-- Outer Row -->
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12 col-md-9">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-5 login-custom">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Login To Your Account</h1>
                                            </div>
                                            <form class="form-horizontal" role="form" method="POST" action="#">
                                                <input type="hidden" name="_token">

                                                <div class="form-group">
                                                    <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <input type="email" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="" name="email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <!-- <label for="password" class="col-md-4 control-label">Password</label> -->
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox small">
                                                    </div>

                                                    <button type="submit" class="btn btn-primary btn-user">
                                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                                    </button>
                                                </div>
                                            </form>
                                            <hr>
                                            <div class="text-center">
                                                <!-- <a class="small" href="https://blockbusterbd.com/register">Create an Account!</a> -->
                                                Don't have an account yet? <br />
                                                <a class="small" href="https://blockbusterbd.com/user/registration"><u>Create an Account!</u></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <script src="https://blockbusterbd.com/assets/admin/sb-admin-2/vendor/jquery/jquery.min.js"></script>
        <script src="https://blockbusterbd.com/assets/admin/sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://blockbusterbd.com/assets/admin/sb-admin-2/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="https://blockbusterbd.com/assets/admin/sb-admin-2/js/sb-admin-2.min.js"></script>
    </body>
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
                    <h2> Blockbuster Cinemas</h2>
                    <h3>Jamuna Future Park</h3>
                    <!--<ul id="single_room_feat">
                        <li><a href="contest.php">Contest</a> || </li>
                        <li><a href="inside_blockbuster.php">Inside Blockbuster </a> || </li>
                        <li><a href="terms_conditions.php">Term & Conditions</a></li>
                        <li><a href="home.php">My Account</a></li>
                     </ul>-->
                    <h3>Customer Care</h3>
                    <ul>
                        <li>customercare@blockbusterbd.com</li>
                    </ul>

                    <p><span style="font-size:18px"><a href="javascript:void(0)"><span style="color:#ffff99">+88-02-9824007</span></a></p>
                    <p><span style="font-size:18px"><a href="javascript:void(0)"><span style="color:#ffff99">+88-01913399015</span></a></p>
                    <p><span style="font-size:18px"><a href="javascript:void(0)"><span style="color:#ffff99">+88-01913398051</span></a></p>
                </div>

                <div class="col-md-3 col-sm-6" id="newsletter">

                    <h3>Newsletter</h3>
                    <p>Join our newsletter to keep updated about Movies and Event Update.</p>
                    <div id="message-newsletter_2"></div>
                    <form method="post" action="https://blockbusterbd.com/subscribe" name="email">
                        <input type="hidden" name="_token" value="gr8xSr5Xj0CmeG2IdBI5K7zAl6JA3qJkF2xQL0aJ">
                        <div class="form-group">
                            <input name="email" id="email_newsletter_2" type="email" placeholder="Your mail" required="true" class="form-control">
                        </div>
                        <input type="submit" value="Subscribe" class="btn_1 white">
                    </form>
                </div>
            </div>
            <!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">

                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/BlockbusterCinemas"><i class="icon-facebook"></i></a></li>

                            <li><a target="_blank" href="https://www.youtube.com/"><i class="icon-youtube"></i></a></li>
                        </ul>
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
@endsection