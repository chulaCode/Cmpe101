@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
<div class="container mb-3">
  @if(Session::has('message'))
      <div class="alert alert-danger text-center">
      {{Session::get('message')}}
      <button type="button" class="close" 
      data-dismiss="alert">&times;</button>
      </div>
   @endif
    <div class="row">

       <div class="col-12">
      
          <section>
              <div class="text-center text-capitalize my-5">
                <hr>
                <h3> 
                  You will redirected to the Quiz section by entering your student number and clicking the SUBMIT button.
              
                </h3>
                <hr>
             </div>
            
            </section>
            <section class="mb-5">
            <div> 
                <h3 class="my-5">
                    After clicking on the quiz section button you'll be redirected to <span class="text-danger">quiz instruction page</span> 
                    please try and read the instruction so you familiarize yourself with the application.
                </h3>
                 <h3 class="my-5">

                  </h3>
                 <h3 class="text-danger mb-5">
                   After taking the quiz you will fill a post-questionnaire to enable us carry on with our research.
                   The <span class="text-success">FILL SURVEY BUTTON </span> will be visible when you're done taking the quiz.
                   <span class="text-success">Please we need your help with the survey</span> thank you.
                 </h3>

                <div>
             
               <div class="col-md-12">   
                        <a href="{{route('profile.display',$value->id)}}" class="float-right"><button type="submit" class="btn btn-secondary  btn-lg px-5">
                            <span style="font-size:18px;">QUIZ SECTION</span></button></a>
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