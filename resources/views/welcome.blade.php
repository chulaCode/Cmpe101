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
    
	<!-- Magnific Popup -->
    
	<!-- Flexslider  -->
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
	<!-- Owl Carousel -->
   
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
        
    <section>
       <div class="unit-5 overlay mb-5" style="background-image:url('{{asset('images/game3.jpg')}}');">
            <div class="container text-center">
                <h2 class="mb-0">{{__('CPME 101 INTRODUCTION TO COMPUTING')}}</h2>
                <h3 > <a href="/"><span class="text-success font-weight-bold" style="">{{__('home')}}</span></a></h3>
            </div>
      </div>
    </section>
<!--
    <section>
      <div class="colorlib-classes ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 colorlib-heading center-heading text-center animate-box">
                        <h1 class="heading-big">Gamification in learning</h1>
                    </div>
                </div>
            </div>	
        </div> 
    </section>
-->
    <section class="mb-5">
      <div class="container">
          <div class="row justify-content-center">
             <div class="col-8 ">
                 <h1 class="text-secondary my-5" style="font-size:40px;">Information</h1>
                 <p class="text-secondary" style="font-size:23px;">This website is prepared for the ‘binary numbering system’ subject of CMPE 101 
                      introduction to computing course of Cyprus International University.</p>
                 <p class="text-secondary my-5" style="font-size:23px;">
                 After entering your student number, you will be directed to a page. On that page, first you are expected to complete the pre-questionnaire 
                 <span class="text-danger">(step 1)</span>. Then you can use the lesson material<span class="text-danger">(step 2)</span>..
                  Finally, you are expected to complete the post-questionnaire <span class="text-danger">(step 3)</span>.
                 </p>
                 <p class="text-secondary my-5" style="font-size:23px;">
                 If you have any questions, please contact: chulazy4christ@gmail.com
                 </p>
              </div>
              <div class="col-4 my-5">
                 <form method="post" action="{{route('survey.store')}}">
                    @csrf
                     <div class="my-5">
                       <label for=" " style="font-size:23px; margin-bottom:10px">Please enter student number</label>                   
                        <input type="number" class="form-control" id="std" name="stdno" 
                        placeholder="Enter student number" required>
                    </div>
            
                    <div class="col-md-12">   
                        <button type="submit" name="submit" value="course" class="btn btn-success  btn-lg btn-block">
                            <span style="font-size:18px;">Submit</span></button>
                    </div>
                 </form>
             </div>
         </div>
       </div>
    </section>
   
     
    
    
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
