@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
<div class="container mb-3">
    <div class="row">
    @if(Session::has('message'))
              <div class="alert alert-danger text-center">
              {{Session::get('message')}}
              <button type="button" class="close" 
              data-dismiss="alert">&times;</button>
              </div>
           @endif
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
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-md-8 col-sm-12">
                        <h1 class="text-secondary my-5">Information</h1>
                        <h3 class="text-secondary" style="">To access the quiz section you'll need to enter your student
                              number. Please Note your student number won't be used for any purpose except so everyone will be differentiated
                              and so your score can be unique to you and you alone.</h3>
                        <h3 class="text-secondary my-5" style="">
                          Please read the instruction carefully on the instruction page and try to answer the questions to 
                          the best of your knowledge don't just pick random answers.
                        </h3>
                        <h3 class="text-secondary my-5" style="font-size:23px;">
                          Please ensure you fill the survey after your done with the interactive quiz. You can take the quiz as much as you want
                          the <span class="text-danger">fill survey button</span> is at the bottom of the instruction page.
                        </h3>
                     </div>
                     <div class="col-md-4 col-sm-12 my-5">
                        <form method="post" action="{{route('post')}}">
                           @csrf
                              <div class="my-5">
                              <label for="studentNo" style="font-size:23px; margin-bottom:10px">Please enter student number</label>                   
                                 <input type="text" class="form-control @error('studentNo') is-invalid @enderror" id="studentNo" name="studentNo"
                               placeholder="Enter student number"  minlength="8" maxlength="8"required>
                               @error('studentNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                     
                           <div class="col-md-12">   
                                 <button type="submit" name="submit" value="course" class="btn btn-secondary  btn-lg btn-block">
                                    <span style="font-size:18px;">Submit</span></button>
                           </div>
                        </form>
                     </div>
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