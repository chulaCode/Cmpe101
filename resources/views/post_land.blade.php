@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
<div class="container mb-3">
    <div class="row">
       <div class="col-12">
      
          <section>
              <div class="text-center text-capitalize my-5">
                <hr>
                <h3> 
                  The post-questionnaire contains questions about the game. If you have not played the game, please ensure you play it before you proceed.

            </h3>
                <hr>
             </div>
            
            </section>
            <section class="mb-5">
                <h3 class="my-5">
                    You will be directed to the post-questionnaire on Google forms by clicking on "POST SURVEY" button.
                </h3>
                 <h3 class="my-5">
                    Please provide consistent and realistic answers to questions in the post-questionnaire. 
                    You can make changes to your responses until you complete the questionnaire. 
                    You must also fill the questionnaires ONLY ONCE.
                 <h3 class="text-danger mb-5">
                      If you have any question and/or any help, please contact: ecemgokdogan@gmail.com </h3>
                 </h3>

                <div>
             
               <div class="col-md-12">   
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfjWs-OzB9smeZo62eiQgk0Y5pS5K4lvsbQEeGYcemLLbgCqA/viewform?vc=0&c=0&w=1" class="float-right">
                        <button type="submit" class="btn btn-secondary  btn-lg px-5">
                            <span style="font-size:18px;">POST SURVEY</span></button></a>
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