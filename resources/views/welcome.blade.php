@extends('layouts.app')
@section('content')
    <!--Home Slider Start -->
<div class="home-slider-area">
  <div id="welcome-slide-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#welcome-slide-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#welcome-slide-carousel" data-slide-to="1"></li>
      <li data-target="#welcome-slide-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox"> 
      <!-- Start Single Slider Item -->
      <div class="item active">
        <div class="single-slide-item slide-1">
          <div class="single-slide-item-table">
            <div class="single-slide-item-table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h2>{{config('app.name')}}<span> - Services électriques</span></h2>
                    <p>Faites affaires avec des électriciens expérimentés pour votre commerce!</p>
                  <a class="slide-btn" href="{{route('contact')}}">Contactez nous</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider Item--> 
      <!-- Start Single Slider Item-->
      <div class="item">
        <div class="single-slide-item slide-2">
          <div class="single-slide-item-table">
            <div class="single-slide-item-table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h2>{{config('app.name')}}<span> - Services électriques</span></h2>
                    <p>Faites affaires avec des électriciens expérimentés pour votre commerce!</p>
                    <a class="slide-btn" href="{{route('contact')}}">Contactez nous</a></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider Item --> 
      <!-- Start Single Slider Item-->
      <div class="item">
        <div class="single-slide-item slide-3">
          <div class="single-slide-item-table">
            <div class="single-slide-item-table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h2>{{config('app.name')}}<span> - Services électriques</span></h2>
                    <p>Faites affaires avec des électriciens expérimentés pour votre commerce!</p>
                    <a class="slide-btn" href="{{route('contact')}}">Contactez nous</a></div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Single Slider Item --> 
      <a class="left welcome-control" href="#welcome-slide-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="right welcome-control" href="#welcome-slide-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
  </div>
</div>
<!--Home Slider End --> 

<!--Home About us Wrapper End -->
<div class="home-aboutus-wrapper" id="about-us">
  <div class="container">
    <div class="row">
	 <div class="col-md-5">
        <div class="about-text">
		<h2>Bienvenue Au <span>{{config('app.name')}}</span></h2>
		<img src="images/about-us.jpg" alt=""> </div>
      </div>
      <div class="col-md-7">
        <div class="about-text">
          <p>Nos techniciens sont spécialisés en industriel. Nous comptons parmi nos clients plusieurs Multinationales avec qui nous avons eu la chance de faire des projets d'envergures.</p>
          <p>Que vous ayez besoin pour l'entretien ou la réparation de vos systèmes électrique, pour des travaux de rénovation ou de construction nous saurons satisfaire vos demandes.</p>
          <ul class="about-list">
            <li><i class="bi bi-tick"></i>Conception et installation de contrôles et de la puissance</li>
            <li><i class="bi bi-tick"></i>Instrumentation</li>
          </ul>
		   <ul class="about-list">
            <li><i class="bi bi-tick"></i>Conception de plan et installation de sécurité machines</li>
            <li><i class="bi bi-tick"></i>Location de technicien et d'électricien</li>
          </ul>
      </div>
    </div>
  </div>
</div>
<!--Home About us Wrapper End -->  
<!-- Our counters -->
<div class="counters">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="counter">
          <div class="counter-icon-box"><i><img src="images/banner-icon-normal.png" alt=""></i></div>
          <div class="number animateNumber" data-num="5325"> <span>5325</span></div>
          <p>Heures de travail</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="counter">
          <div class="counter-icon-box"><i><img src="images/banner-icon-normal.png" alt=""></i></div>
          <div class="number animateNumber" data-num="160"> <span>160</span></div>
          <p>Clients satisfaits</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="counter">
          <div class="counter-icon-box"><i><img src="images/banner-icon-normal.png" alt=""></i></div>
          <div class="number animateNumber" data-num="530"> <span>530</span></div>
          <p>Projets terminés</p>
        </div>
      </div>
      {{-- <div class="col-sm-3">
        <div class="counter">
          <div class="counter-icon-box"><i><img src="images/banner-icon-normal.png" alt=""></i></div>
          <div class="number animateNumber" data-num="49"> <span>49</span></div>
          <p>Awards Won</p>
        </div>
      </div> --}}
    </div>
  </div>
</div>
<!-- Our counters End --> 
<!--Home Services Start -->
<div class="home-services-wrapper" id="services">
  <div class="container">
    <div class="title">
      <h2>Nos services</h2>
      <span></span> <img src="images/title-icon.png" alt=""></div>
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"> <i class="bi bi-home" aria-hidden="true"></i>
            <h3 class="title">Services résidentiels</h3>
          </div>
          <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"> <i class="bi bi-spark" aria-hidden="true"></i>
            <h3 class="title">Service commercial</h3>
          </div>
          <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"> <i class="bi bi-table-lamp" aria-hidden="true"></i>
            <h3 class="title">Service Industriel</h3>
          </div>
          <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"> <i class="bi bi-worker-cap" aria-hidden="true"></i>
            <h3 class="title"> Réparation électrique</h3>
          </div>
          <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"> <i class="bi bi-video-cam" aria-hidden="true"></i>
            <h3 class="title">Sécurité électrique</h3>
          </div>
          <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="serviceBox">
          <div class="service-icon"> <i class="bi bi-bulb" aria-hidden="true"></i>
            <h3 class="title">Assistance électrique</h3>
          </div>
          <p class="description"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam cumque, cupiditate debitis dolorem et fugit hic iusto maxime numquam officia. </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Home Services End --> 
<!-- Call to Action Start -->
<div class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3>Avez-vous besoin d'aide pour la maintenance électrique?</h3>
      <a href="{{route('contact')}}" class="btn">CONTACTEZ NOUS</a>
      </div>
    </div>
  </div>
</div>
<!-- Call to Action End --> 

{{-- <!-- Our Team Wrapper Start -->
<div class="our-team-wrapper">
  <div class="container">
    <div class="title">
      <h2>Our Team</h2>
      <span></span> <img src="images/title-icon.png" alt=""></div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="single-team-member">
          <figure class="img-box"> <a href="javascript:void(0)"><img src="images/out-team1.jpg" alt=""></a>
            <div class="overlay">
              <div class="inner-box">
                <ul class="social">
                  <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </figure>
          <div class="author-info"> 
            <h4>Person Name</h4>
            <p>Designation</p>
            <ul>
              <li><i class="fa fa-phone"></i>Phone: +012-345-6789</li>
              <li><i class="fa fa-envelope"></i><a href="javascript:void(0)">info@sbtechnosoft.com</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-team-member">
          <figure class="img-box"> <a href="javascript:void(0)"><img src="images/out-team2.jpg" alt=""></a>
            <div class="overlay">
              <div class="inner-box">
                <ul class="social">
                  <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </figure>
          <div class="author-info">
            <h4>Person Name</h4>
            <p>Designation</p>
            <ul>
              <li><i class="fa fa-phone"></i>Phone: +012-345-6789</li>
              <li><i class="fa fa-envelope"></i><a href="javascript:void(0)">info@sbtechnosoft.com</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-team-member">
          <figure class="img-box"> <a href="javascript:void(0)"><img src="images/out-team3.jpg" alt=""></a>
            <div class="overlay">
              <div class="inner-box">
                <ul class="social">
                  <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </figure>
          <div class="author-info"><h4>Person Name</h4>
          <p>Designation</p>
            <ul>
              <li><i class="fa fa-phone"></i>Phone: +012-345-6789</li>
              <li><i class="fa fa-envelope"></i><a href="javascript:void(0)">info@sbtechnosoft.com</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-team-member">
          <figure class="img-box"> <a href="javascript:void(0)"><img src="images/out-team4.jpg" alt=""></a>
            <div class="overlay">
              <div class="inner-box">
                <ul class="social">
                  <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="javascript:void(0)"><i class="fa fa-skype"></i></a></li>
                </ul>
              </div>
            </div>
          </figure>
          <div class="author-info">
          <h4>Person Name</h4>
          <p>Designation</p>
            <ul>
              <li><i class="fa fa-phone"></i>Phone: +012-345-6789</li>
              <li><i class="fa fa-envelope"></i><a href="javascript:void(0)">info@sbtechnosoft.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}
<!-- Our Team Wrapper End --> 
<!-- Testimonials Wrapper Start -->
<div class="testimonials-wrapper">
  <div class="container">
    <div class="title">
      <h2>Témoignages de clients</h2>
      <span></span> <img src="images/title-icon.png" alt=""></div>
    <div class="col-lg-8 col-lg-offset-2">
      <div id="testimonial" class="owl-carousel owl-theme">
        <div class="item">
          <blockquote>
            <div class="row">
              <div class="col-lg-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <small>Client Name</small> </div>
            </div>
          </blockquote>
        </div>
        <div class="item">
          <blockquote>
            <div class="row">
              <div class="col-lg-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <small>Client Name</small> </div>
            </div>
          </blockquote>
        </div>
        <div class="item">
          <blockquote>
            <div class="row">
              <div class="col-lg-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <small>Client Name</small> </div>
            </div>
          </blockquote>
        </div>
        <div class="item">
          <blockquote>
            <div class="row">
              <div class="col-lg-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                <small>Client Name</small> </div>
            </div>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Wrapper End --> 
<!-- Blog Wrapper End -->
<div class="blog-wrapper" id="blog">
  <div class="container">
    <div class="title">
      <h2>Notre blog</h2>
      <span></span> <img src="images/title-icon.png" alt=""></div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-blog-section"> <img src="images/blog1.jpg" alt="">
          <div class="blog-info">
            <div class="date-box">
              
            </div>
            <div class="content">
              <h3>Blog Title </h3>
              <div class="collor-bottom-two"></div>
            </div>
            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>17 Avril 2019 </a> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi..... </p>
            <a href="{{route('article')}}"><button class="btn btn-default unicod-btn-black" type="submit">Lire la suite</button>
            </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-blog-section"> <img src="images/blog2.jpg" alt="">
          <div class="blog-info">
            <div class="date-box">
              
            </div>
            <div class="content">
              <h3>Blog Title </h3>
              <div class="collor-bottom-two"></div>
            </div>
            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>17 Avril 2019 </a> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi..... </p>
            <a href="{{route('article')}}"><button class="btn btn-default unicod-btn-black" type="submit">Lire la suite</button>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="single-blog-section"> <img src="images/blog3.jpg" alt="">
          <div class="blog-info">
            <div class="date-box">
              
            </div>
            <div class="content">
              <h3>Blog Title </h3>
              <div class="collor-bottom-two"></div>
            </div>
            <a href=""><i class="fa fa-calendar" aria-hidden="true"></i>17 Avril 2019 </a> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi..... </p>
            <a href="{{route('article')}}"><button class="btn btn-default unicod-btn-black" type="submit">Lire la suite</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blog Wrapper End --> 
@endsection
