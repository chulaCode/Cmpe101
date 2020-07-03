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
                   You will be redirected to the game section by clicking GAME SECTION button at the bottom of the page.
                </h2>
                <hr>
             </div>
             <div> 
                <h3 class="my-5">
                    After clicking on the Game section button you'll be redirected to <span class="text-danger">game instruction page</span> 
                    please read the instruction and watch video
                    on how to play. Click the <span class="text-danger">practice game button</span> to learn how to play the game
                    before you proceed to play the game after you're sure you've known how to play.
                </h3>
                 <h3 class="my-5">
                  After you're done with the game you can submit your score to score board to see how you rank among other gamers
                  please note you will need to submit a nick name  to access the score board.
                 
                 </h3>
                 <h3 class="text-danger mb-5">
                   After playing the game you will fill a post-questionnaire to enable us carry on with our research.
                   The <span class="text-success">FILL SURVEY BUTTON </span> will be visible when you're done playing the game.
                   <span class="text-success">Please we need your help with the survey</span> thank you.
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