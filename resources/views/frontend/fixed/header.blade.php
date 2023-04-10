<!-- Boxed container --><!-- Header================================================== -->
<header>
   <div id="top_line">
      <div class="container">
         <!-- <p style="color:#0F75BC; float:right;padding-top:0px;font-size:15px;margin: 0 0 0px 0;">Urgent<span style="color:#fff;">Phone Support Not Available from 27th Dec 2PM to 31st Dec 11AM</span></p>  --->
      </div>
      <!-- End container-->
   </div>
   <!-- End top line-->
   <div id="top_header">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-4">
               <div id="logo" class="logomobile">
                  <a href="{{route('webhome')}}"><img style="width:600px;height:120px;" src="{{url('/uploads/1.jpg')}}" id="logoimg" alt="Blockbuster Cinemas" data-retina="true"></a>
               </div>
            </div>

            <div class="col-md-4 col-sm-4">
               <div class="alert__div">


               </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 text-right margin-top40">




               <!-- <a href="https://blockbusterbd.com/user/login"><button type="button">Login</button></a>
                           <a href="https://blockbusterbd.com/user/registration"><button type="button">Registration</button></a> -->
               <div class="menuDrop">
                  <ul>
                     @auth()
                     <li class="nav-item"> <a href="  {{route('user.profile')}}" class="nav-item nav-link"> {{ auth()->user()->name}}
                        
                         
                        </a>
                     </li>
                     <li class="nav-item"> <a href="{{route('user.logout')}}" class="nav-item nav-link"> Log Out</a></li>
                     @else
                     <li>
                        <a href="{{route('web.login')}}">Login</a>
                     </li>
                     <li>
                        <a href="{{route('web.registration')}}">Registration</a>
                     </li>

                     @endauth
                  </ul>
               </div>


               <p style="margin-bottom: 0"><span style="font-size:18px"><a href="javascript:void(0)"><span class="phone__icon" style="color:#ffff99"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                           </svg>01642046852</span></a></p>
            </div>
         </div>
      </div>

      <nav class="col-md-12 col-sm-12 col-xs-12" id="nav">
         <a class="cmn-toggle-switch cmn-toggle-switch__rot  open_close" href="javascript:void(0);"><span>Menu</span></a>
         <div class="main-menu">
            <div id="header_menu">
               <img src="https://blockbusterbd.com/assets/web/img/logo.png" width="240" alt="Welcome to Block Buster" data-retina="true">
            </div>
            <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
            <ul>
               <li>
                  <a href="{{route('webhome')}}">Home</a>
               </li>
               <li class="submenu">
                  <a href="javascript:void(0);" class="show-submenu">Movies <i class="icon-down-open-mini"></i></a>
                  <ul>
                     <li><a href="{{route('nowshowing')}}" class="common-loader">Now Showing</a></li>
                     <li><a href="{{route('upcomming')}}" class="common-loader">Upcoming</a></li>
                  </ul>
               </li>
               <li><a href="https://blockbusterbd.com/schedule" class="common-loader">Schedule</a></li>
               <li><a href="https://blockbusterbd.com/ticket-price" class="common-loader">Ticket Price</a></li>
               <li><a href="https://blockbusterbd.com/contact-us" class="common-loader">Contact us</a></li>
            </ul>
         </div>
         <!-- End main-menu -->
      </nav>
   </div>
</header>
<!-- End Header -->