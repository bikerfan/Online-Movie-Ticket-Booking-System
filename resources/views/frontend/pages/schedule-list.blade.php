@extends('frontend.master')


@section('content')
<div id="boxed">

    <section class="sub_header" id="bg_general">
        <div class="sub_header_content">

        </div>
    </section>

    <style>
        table td {
            text-align: center;
        }
    </style>
    <div class="bg_gray">
        <div class="container">
            <h3>Schedule</h3>
            <br>
            <p style="margin-bottom:5px;"> Except Weekends and Other Holidays</p>
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <table class="table table-striped table-bordered table-condensed">
                        <thead>
                            <p style="margin-bottom:0; padding:5px 7px; text-align:center; background:#a43943; color:#FFF;">ShowTime</p>
                        </thead>
                        <tbody>
                            <tr>

                                <th scope="col">Day</th>
                                <th scope="col">Morning Show</th>
                                <th scope="col">Evining Show</th>
                                <th scope="col">Night Show</th>
                            </tr>
                            <tr>

                                <td>Monday</td>
                                <td>9AM-12AM</td>
                                <td>3PM-6PM</td>
                                <td>7PM-10PM</td>


                            </tr>
                            <tr>

                                <td>Tuesday</td>
                                <td>9AM-12AM</td>
                                <td>3PM-6PM</td>
                                <td>7PM-10PM</td>


                            </tr>
                            <tr>

                                <td>Wednesday</td>
                                <td>9AM-12AM</td>
                                <td>3PM-6PM</td>
                                <td>7PM-10PM</td>


                            </tr>
                            <tr>

                                <td>Thursday</td>
                                <td>9AM-12AM</td>
                                <td>3PM-6PM</td>
                                <td>7PM-10PM</td>


                            </tr>
                            <tr>

                                <td>Friday</td>
                                <td>9AM-12AM</td>
                                <td>3PM-6PM</td>
                                <td>7PM-10PM</td>


                            </tr>
                            <tr>

                                <td>Saturday</td>
                                <td>9AM-12AM</td>
                                <td>3PM-6PM</td>
                                <td>7PM-10PM</td>


                            </tr>
                            <tr>

                                <td>Sunday</td>
                                <td>OFF</td>
                                <td>OFF</td>
                                <td>OFF</td>


                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>




        </div>
        <!-- End container -->
    </div>

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

