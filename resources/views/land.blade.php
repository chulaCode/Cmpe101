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
                    After clicking on the Game section you'll be directed to<span class="text-danger">game instruction page</span> 
                    be sure to read the instruction carefully and watch video
                    on how to play. Be sure to clıck the <span class="text-danger">practice button</span> to learn how to play the game
                    before you procced to play the game after you're sure you've known how to play
                </h3>
                 <h4 class="my-5">
                 At the game page before starting game you'll be prompted to read <span class="text-danger">"GAME RULE"</span>
                  before starting game by clicking<span class="text-danger">"start"</span> be ensure you read the rule carefully.
                  after you're done with the game you can submit your score to score board to see how you rank amidst other gamers
                  please note you'll need to submit your name and student number to access the score board your student number will 
                  not be displaced just your name. NOTE your detail will not be used for anything except to identify among other gamers.

                   <span class="danger">After the game you'll need to fill the post-questionnaire is important to fill the 
                   post-questionnaire to get the 10% mark that will be awarded to those that partake in this research.
                   the FILL SURVEY BUTTON is at the right side bar at the game page. Be sure to click it to complete the post-questionnaire thanks.
                 </h4>

                <div>
             
               <div class="col-md-12">   
                        <a href="" class="float-right"><button type="submit" class="btn btn-secondary  btn-lg px-5">
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