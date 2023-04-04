<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>

<head>
   <!--<![endif]-->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="keywords" content="Blockbuster Cinemas, Star Cineplex" />
   <meta name="description" content="Welcome to Blockbuster Cinemas">
   <meta name="author" content="Electro CRAFT Corporation Ltd">
   <meta name="csrf-token" content="0zvsJcDGhJ69sF0ybacTsUlaXcdGMvwaNsbJz3KI" />
   <title>Welcome to Online Movie Ticket</title>
   <!-- Favicons-->
   <link rel="shortcut icon" href="https://blockbusterbd.com/assets/web/img/favicon.ico" type="image/x-icon">
   <link rel="apple-touch-icon" type="image/x-icon" href="https://blockbusterbd.com/assets/web/img/apple-touch-icon-57x57-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="https://blockbusterbd.com/assets/web/img/apple-touch-icon-72x72-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="https://blockbusterbd.com/assets/web/img/apple-touch-icon-114x114-precomposed.png">
   <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="https://blockbusterbd.com/assets/web/img/apple-touch-icon-144x144-precomposed.png">
   <!-- Google web fonts -->
   <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <!-- BASE CSS -->
   <link href="https://blockbusterbd.com/assets/web/css/base.css" rel="stylesheet">
   <!-- REVOLUTION SLIDER CSS -->
   <link href="https://blockbusterbd.com/assets/web/rs-plugin/css/settings.css" rel="stylesheet">
   <link href="https://blockbusterbd.com/assets/web/css/extralayers.css" rel="stylesheet">
   <link href="https://blockbusterbd.com/assets/web/css/date_time_picker.css" rel="stylesheet">
   <link href="https://blockbusterbd.com/assets/web/css/booking.css" rel="stylesheet">
   <link href="https://blockbusterbd.com/assets/web/css/customize.css" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="https://blockbusterbd.com/assets/web/css/jquery-ui.css">

   <script type="text/javascript">
      var webURL = "https://blockbusterbd.com";
   </script>
   <script type="text/javascript">
      var startDate = "04-04-2023";
   </script>


   <!--[if lt IE 9]>
      <script src="https://blockbusterbd.com/assets/web/html5shiv.min.js"></script>
      <script src="https://blockbusterbd.com/assets/web/respond.min.js"></script>
   <![endif]-->



   <!-- start slider-->
   <link rel="stylesheet" type="text/css" href="https://blockbusterbd.com/assets/web/slider_blockbuster/css/style.css">
   <link rel="stylesheet" type="text/css" href="https://blockbusterbd.com/assets/web/slider_blockbuster/css/style_003.css">
   <link rel="stylesheet" type="text/css" href="https://blockbusterbd.com/assets/web/slider_blockbuster/css/media.css">



   <script type="text/javascript" src="https://blockbusterbd.com/assets/web/slider_blockbuster/js/jquery-1.js"></script>
   <script type="text/javascript" src="https://blockbusterbd.com/assets/web/slider_blockbuster/js/modernizr.js"></script>
   <script type="text/javascript" src="https://blockbusterbd.com/assets/web/slider_blockbuster/js/jquery.js"></script>
   <script>
      // Javascript originally by Patrick Griffiths and Dan Webb.
      // http://htmldog.com/articles/suckerfish/dropdowns/ 
      sfHover = function() {
         var sfEls = document.getElementById("navbar").getElementsByTagName("li");
         for (var i = 0; i < sfEls.length; i++) {
            sfEls[i].onmouseover = function() {
               this.className += " hover";
            }
            sfEls[i].onmouseout = function() {
               this.className = this.className.replace(new RegExp(" hover\\b"), "");
            }
         }
      }
      if (window.attachEvent)
         window.attachEvent("onload", sfHover);
   </script>
   <script type="text/javascript">
      $(function() {
         $('#dg-container').gallery();
      });
   </script>


</head>

<body>
   @include('frontend.fixed.header')
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
   @yield('content')






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