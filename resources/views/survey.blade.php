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
                 Participation in playing binary game to Enhance Motivation and engagement
                 in Learning.
                </h3>
                <hr>
             </div>
             <div>
                 <h4>This research aims to enhance the motivation and engagement of students in 
                     learning. It is intended to support "binary numbering system" subject with a gaming tool
                     and thus, increase students’ intrinsic motivation 
                     and engagement to learning</h4>

                     <h4 class="my-5">The questionnaire consists of three different parts. These are</h4>

                     <h4>
                        1. Demographic Information <br>
                        2. Information on your engagement why learning <br>
                        3. Information on Motivation <br>
                    
                     </h4>
                     <h4 class="my-5">
                        The questionnaire will take 3 - 6 minutes to complete.
                     </h4>
                     <h4 class="my-5 text-danger">
                         Thank you for accepting to paricipate in this research i'm so grateful, please be aware that you'll need to enter your 
                         student number while filling the pre-questionnaire and post questionnaire so we can compare your responses for the pre and post questionnaire.
                         Your student number won't be used for anything else rather than to compare your response thank you.
                        </h4>
                     <h4 class="my-5 text-danger">
                      </h4>
                     <h4 class="">
                       Thank you for participating in this study. We really appreciate your contribution to this research.
                     </h4>
             </div>
             <div class="row">
                 <div class="col-5">
                    <h4 class="my-4">
                        Ochulaobari Emmanuel (Graduate Student)
                        Graduate Program in Information Technology Department
                        Institute of Graduate Studies and Research
                        Cyprus International University
                     </h4>
                   </div>
                 <div class="col-7"></div>
             </div>
             <div class="row">
                 <div class="col-10">
                   <h4>
                       If you need more information about this work, you can contact my thesis advisor.

                   </h4>
                 </div>
             </div>
             <div class="row">
                 <div class="col-6">
                    <h4 class="my-4">
                        Ochulaobari Emmanuel (Graduate Student) <br>
                        Graduate Program in Information Technology Department <br>
                        Institute of Graduate Studies and Research <br>
                        Cyprus International University <br>
                        <a href="https://mail.google.com/"> ochulaobariEmmanuel@gmail.com</a> <br>
                        Phone: +90 533 848 27 63
                     </h4>
                   </div>
                 <div class="col-6">
                  <h4 class="my-4"> 
                    Asst. Prof. Dr. Çağın KAZIMOĞLU <br>
                    Computer Engineering Department <br>
                    Faculty of Engineering <br>
                    Cyprus International University <br>
                    ckazimoglu@ciu.edu.tr <br>
                    Phone: +90 671 11 11-2416
                 </h4>
                 </div>
             </div>

            <div>
                <h4 class="my-4"> *By clicking on continue button you've agreed to participate in this research</h4>
            </div>
             <div>
               <div class="col-md-12">   
                        <a href="{{route('pretest')}}" class="float-right"><button type="submit" class="btn btn-secondary  btn-lg px-5">
                            <span style="font-size:18px;">Continue</span></button></a>
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