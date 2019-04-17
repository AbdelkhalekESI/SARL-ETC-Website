<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title> {{ config('app.name')}} </title>
<!-- Bootstrap CSS -->
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome CSS-->
<!-- <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

 -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css

">
 <!-- bicon CSS -->
<link rel="stylesheet" href="assets/css/bicon.min.css">
<!-- Mobile Menu Css -->
<link href="assets/css/meanmenu.css" rel="stylesheet">
<!-- Owl Carousel -->
<link href="assets/owl-carousel/css/owl.carousel.css" rel="stylesheet">
<link href="assets/owl-carousel/css/owl.theme.css" rel="stylesheet">
<!-- images popup CSS -->
<link href="assets/css/magnific-popup.css" type="text/css" rel="stylesheet" />
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- Animate CSS -->
<link href="assets/animate/animate.css" rel="stylesheet">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->

<header class="wow fadeInDown" data-offset-top="197" data-spy="affix">
  <div class="top-wrapper hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-9">
          <div class="top-header-add">
            <ul>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Address :</span> </li>
              <li><i class="fa fa-phone" aria-hidden="true"></i><span>Appelez nous :</span> +213 541327288</li>
              {{-- <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="javascript:void(0)"><span>Email :</span> info@sbtechnosoft.com</a></li> --}}
            </ul>
          </div>
        </div>
        <div class="col-md-3 hidden-sm">
          {{-- <ul class="header-social-icons">
            <li class="facebook"><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li class="linkedin"><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li class="pinterest"><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li class="google-plus"><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li class="youtube"><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>
            <li class="dribbble"><a href="javascript:void(0)" target="_blank"><i class="fa fa-dribbble"></i></a></li>
          </ul> --}}
        </div>
      </div>
    </div>
  </div>
  <div class="logo-bar">
    <div class="container"> 
      <!-- Logo --> 
      <!-- Navigation -->
      <div class="col-md-12 col-sm-12  col-xs-12 mainmenu-area no-padding">
        <nav class="navbar navbar-default mean-nav"> 
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="ElectricalPlus"/></a> </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="mobile-menu nav navbar-nav">
            <li class="active"><a href="{{route('main')}}">Accueil</a></li>
              <li><a href="#about-us">A propos</a></li>
              <li><a href="#services" role="button" aria-haspopup="true" aria-expanded="false">Services </a>
              </li>
              <li> <a href="#blog"  role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                
              </li>
             
            <li> <a href="{{route('contact')}}">Contactez nous</a> </li>
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- Header End --> 
<!-- Body Start --> 
@yield('content')
<!-- Body end -->
<div class="footer-wrapper">
    {{-- <div class="footer-top-area">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-about-info-area footer-top-content">
              <div class="footer-widget-heading">
                <h3>About Us</h3>
              </div>
              <div class="footer-widget-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem en molestiae quis, maiores explicabo inventore sit quos. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                <ul class="footer-social-menu list-inline">
                  <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-linkedin-square"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-tags-widget">
              <div class="footer-widget-heading">
                <h3>Quick Links</h3>
              </div>
              <div class="footer-widget-content">
                <ul class="footer-widget-menu">
                  <li> <a href="javascript:void(0)">Electrical</a> </li>
                  <li> <a href="javascript:void(0)">AC</a></li>
                  <li> <a href="javascript:void(0)">worker</a></li>
                  <li> <a href="javascript:void(0)">electric</a> </li>
                  <li> <a href="javascript:void(0)">repairing</a> </li>
                  <li> <a href="javascript:void(0)">electrician</a> </li>
                  <li> <a href="javascript:void(0)">Power</a> </li>
                  <li> <a href="javascript:void(0)">Support</a> </li>
                  <li> <a href="javascript:void(0)">Security</a> </li>
                  <li> <a href="javascript:void(0)">Residential</a> </li>
                  <li> <a href="javascript:void(0)">Repair</a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-contact">
              <div class="footer-widget-heading">
                <h3>Contact Us</h3>
              </div>
              <div class="footer-widget-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <ul class="footer-conatct-menu">
                  <li> <a href="javascript:void(0)"><i class="fa fa-envelope"></i><span>Email :</span> info@sbtechnosoft.com</a> </li>
                  <li> <a href="javascript:void(0)"><i class="fa fa-phone"></i> <span>Phone : </span> +1 123 456 7890</a> </li>
                  <li> <a href="javascript:void(0)"><i class="fa fa-map-o"></i><span>Address :</span> 34 street, NY 10018</a> </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-instagram">
              <div class="footer-widget-heading">
                <h3>Instagram Photos</h3>
              </div>
              <div class="footer-instagram-widget footer-widget-content"> <a href="javascript:void(0)"><img src="images/testimonials1.png" alt=""></a> <a href="javascript:void(0)"><img src="images/testimonials2.png" alt=""></a> <a href="javascript:void(0)"><img src="images/testimonials3.png" alt=""></a> <a href="javascript:void(0)"><img src="images/testimonials3.png" alt=""></a> <a href="javascript:void(0)"><img src="images/testimonials2.png" alt=""></a> <a href="#"><img src="images/testimonials1.png" alt=""></a> </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <div class="copyright-wrapper">
      <div class="container">
      <p>&copy; Copyright 2019, {{config('app.name')}} | Tous les droits sont réservés.</p>
      </div>
    </div>
  </div>
<!-- Footer Wrapper End --> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="assets/jquery/jquery-3.1.1.min.js"></script> 
<script src="assets/jquery/jquery.meanmenu.js"></script> 
<script src="assets/jquery/plugins.js"></script> 
<script src="assets/number-animation/jquery.animateNumber.min.js"></script> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="assets/owl-carousel/js/owl.carousel.js"></script> 
<script src="assets/wow/wow.min.js"></script> 
<script src="assets/jquery/jquery.magnific-popup.js"></script>
<script src="js/custom.js"></script>
</body>
</html>