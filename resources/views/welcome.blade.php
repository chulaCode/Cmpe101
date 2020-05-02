<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CMPE GAMIFIED</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<!-- Icomoon Icon Fonts-->
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
	<!-- Magnific Popup -->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
	<!-- Flexslider  -->
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
	<!-- Owl Carousel -->
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
	<!-- Flaticons  -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css.map') }}" rel="stylesheet">
 
	<!-- Theme style  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    <!-- 
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif   
        </div>
        -->

	<div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
    <div class="upper-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <P>GAME EXPERIENCE WITH CMPE 101</P>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="colorlib-logo"><a href="/">
                        <span class="">Introduction To Computing Gamified</span></a></div>
                    </div>
                    <!--
                    <div class="col-md-6 text-right">
                    
                        <ul >
                        @if(Route::has('login'))
                        <div class="top-right links">
                         @auth
                        <p style="color:white; font-weight: bold;">You're logged in click Acces system to proceed thanks!</p>
                        
                         @else
                            <li> <a href="{{ route('register') }}">Register</a></li>
                            <li class="btn-cta"> <a href="{{ route('login') }}"><span style="background:black">Login</span></a></li>
                            @endif
                            @endauth
                        </ul>
                        
                       
                    </div>
                    -->
                    
                     
                </div>
            </div>
        </div>
    </nav>
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
              
               <li class="img-fluid" style="background-image: url(images/game3.jpg);">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-8 col-sm-12 col-md-offset-3 col-xs-12 col-md-pull-1 slider-text">
                               <div class="slider-text-inner" style="">
                                   <div class="desc" style="padding:7px;margin-bottom:14px; background-color:black; opacity:0.7">
                                       <h1>This study is aimed at investigating whether or not students taking introduction to computing
                                        can be motivated and angaged more with a gamified experience added to their course.</h1>
                                      
                                   </div>
                                  
                                   <form action="/survey" method="get">
                                         @csrf
                                         <!--
                                         <div class="form-group col-md-9 px-lg-5 mx-sm-3 my-4">
                                            <label for="inputPassword2" class="sr-only">Password</label>
                                            <input type="text" class="form-control" id="std" name="stdno" placeholder="Enter student number and click submit to access the system">
                                        </div>
                                        <button type="submit" name="submit" value="course" class="btn btn-dark btn-lg ">Submit Form</button>
                                      -->
                                         <button type="submit" name="submit"  class="btn btn-dark btn-lg ">Please fill survey & proceed</button>
                             
                                      </form>
                                      
                                       </div>
                           </div>
                       </div>
                   </div>
               </li>
               <!--
               <li class="img-fluid" style="background-image: url(images/game1.jpg); ">
                   <div class="overlay"></div>
                   <div class="container-fluid">
                       <div class="row">
                           <div class="col-md-8 col-sm-12 col-md-offset-2 col-xs-12 col-md-pull-1 slider-text">
                               <div class="slider-text-inner">
                                   <div class="desc">
                                       <h2>You only have to know one thing</h2>
                                       <h1><span>Education is a Key to Success</span></h1>
                                       <form action="/enrol" method="get">
                                         @csrf
                                       <p><button type="submit" name="submit" value="course" class="btn btn-danger btn-lg">
                                       
                                       <span class="icon"><i class="fas fa-graduation-cap"></i></span>View Course</button></p>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </li>
              -->
              
              </ul>
          </div>
    </aside>
    <!-- end of carousal -->
    <div class="colorlib-classes ">
			<div class="container">
				<div class="row">
					<div class="col-md-12 colorlib-heading center-heading text-center animate-box">
						<h1 class="heading-big">Gamification in learning</h1>
						<h2>Gamification in learning</h2>
					</div>
				</div>
            </div>	
     </div>
     
   
      <!-- ending div -->
    </div>
    
    <footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | coder <i class="icon-heart" aria-hidden="true"></i> Ochulaobari Emmanuel
              </small><br> 
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
        <!-- jQuery -->
	<script src="js/jquery.min.js"></script>
    
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/carousal.js"></script>
	<!-- Magnific Popup -->
	<script src="js/magnitic-popup.min.js"></script>
	<script src="js/magnific-popup.js"></script>
	<!-- Counters -->
	<script src="js/count.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

    </body>
</html>
