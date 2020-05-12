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
                Participation in taking interaction quiz to Enhance Motivation and engagement
                 in Learning intoduction to computing.
                </h3>
                <hr>
             </div>
             <div>
                 <h4>This research aims to enhance the motivation and engagement of students in 
                     learning “binary numbering system” subject in Introduction to Computing courses being 
                     taught in Cyprus International University (CIU). It is intended to support this course with an interaction quiz in 
                     order to support the learning process of “Binary Numbering system” subject and thus, increase students’ intrinsic motivation, 
                     attitude towards answering questions, grade motivation and knowledge.</h4>

                     <h4 class="my-5">The questionnaire consists of five different parts. These are</h4>

                     <h4>
                        1. Demographic Information <br>
                        2. Background in Introduction to Computing, “Binary Numbering System” subject and gaming <br>
                        3. Intrinsic Motivation <br>
                        4. Attitude towards taking interaction quiz<br>
                        5. Knowledge <br>
                     </h4>
                     <h4 class="my-5">
                        The questionnaire will take 5 - 10 minutes to complete.
                     </h4>
                     <h4>
                        Please be aware that it is your choice whether to participate in this questionnaire or not. If you choose to participate,
                         you will gain %10 marks to overall mark of your chemistry course. Your student number was asked to enter this before 
                         filling in the questionnaire, because we will ask for your student number later to complete another questionnaire after
                          playing game. Your student number is an identifier to compare your responses from the pre-questionnaire (i.e. this questionnaire) 
                          with the post-questionnaire (the one you will use a particular course material) and we will not use it for any other purpose.
                     </h4>
                     <h4 class="my-5 text-danger">
                       Please answer all questions honestly especially in the knowledge section. Please if you do not find the correct answer, do not ask around
                      or search the Internet. Try to answer all questions on your own without getting any help. This is not exam, we are just trying to
                       understand how we can enhance education with interactive tools. So please do not worry even if you answer wrong, this will not affect your marks.
                     </h4>
                     <h4 class="">
                       Thank you for participating in our study. We really appreciate your contribution to this research.
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
                        codechula@gmail.com <br>
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
                <h4 class="my-4"> By clicking on continue button you've agreed to participate in this research</h4>
            </div>
             <div>
               <div class="col-md-12">   
                        <a href="{{route('quiz.pretest')}}" class="float-right"><button type="submit" class="btn btn-secondary  btn-lg px-5">
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