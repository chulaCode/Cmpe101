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
                   You will be directed to the pre-questionnaire on Google forms by clicking on "TAKE-SURVEY" button at the bottom of this page.
                </h3>
                <hr>
             </div>
             <div> 
                <h4 class="my-5">
                    Please provide <span class="text-danger">consistent and realistic answers</span> to questions in the pre-questionnaire. You can make changes 
                    to your responses until you complete the questionnaire. Please fill the survey<span class="text-danger"> only once thank you.</span>.
                </h4>
                 <h3 class="my-5">
                 At the end of the survey, a link will be given to you to reach the <span class="text-danger">"GAME SECTION"</span>.
                   Please don't forget to click <span class="text-danger">"The "LINK" that is underlined and enclosed in [ ]</span>  BEFORE clicking on "SUBMIT" button. because when you 
                   click on submit button you cannot access that last survey page again.
                 </h3>

                 <h3 class=" d-none d-lg-block my-5 mr-5 font-weight-bold text-center ">Sample view at the end of Pre-Questionnaire</h3>
                 <div class="d-none d-lg-block"><img src="{{asset('images/preQues.jpg')}}" alt="" class="" style="margin-left:150px"></div>
                <div>
             
                   <div class="col-md-12 ">   
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe3a2rNANxLgCmAl11SF-gDZnhrLcbPlgjPIW8vikRctbz1Mw/viewform?vc=0&c=0&w=1" 
                        class="float-right" target="_blank"><button type="submit" class="btn btn-secondary  btn-lg px-5">
                            <span style="font-size:18px;">TAKE SURVEY</span></button></a>
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