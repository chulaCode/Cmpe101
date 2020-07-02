@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
<div class="container mb-3">
    <div class="row">
       <div class="col-12">
      
          <section>
              <div class="text-center text-capitalize my-5">
                <hr>
                <h2> 
                   You will redirected to the game section by click GAME SECTION button at the bottom of the page.
                </h2>
                <hr>
             </div>
             <div> 
                <h3 class="my-5">
                    After clicking on the Game section button you'll be directed to <span class="text-danger">game instruction page</span> 
                    please try to read the instruction carefully and watch video
                    on how to play. please try and clıck the <span class="text-danger">practice button</span> to learn how to play the game
                    before you procced to play the game after you're sure you've known how to play.
                </h3>
                 <h3 class="my-5">
                </h3>
                 <h3 class="text-danger mb-5">
                   After the playing the game you'll help me fill a post-questionnaire. Please i also need your help with 
                   the post-questionaire so i can proceed with my study thank you so much for your time and participation.
                   the <span class="text-success">FILL SURVEY BUTTON </span> will be visible when youre done playing the game thank you.
                 </h3>

                <div>
             
               <div class="col-md-12">   
                        <a href="{{route('profile.show')}}" class="float-right"><button type="submit" class="btn btn-secondary  btn-lg px-5">
                            <span style="font-size:18px;">GAME SECTION</span></button></a>
                    </div>
             </div>
            
            </section>
       </div>
   </div>
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
	
@endsection