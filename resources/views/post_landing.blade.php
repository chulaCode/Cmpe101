@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
<div class="container mb-5">
    <div class="row">
       <div class="col-12">
      
          <section>
              <div class="text-center text-capitalize my-5">
                <hr>
                <h3> 
                  The post-questionnaire contains questions about the interactive quiz application. If you have not used the application, 
                  please use the application before you proceed thank you.

            </h3>
                <hr>
             </div>
            
            </section>
            <section class="mb-5">
                <h3 class="my-5">
                   <span class="text-success">Thank you for choosing to partiipate.</span>
                    You will be redirected to the post-questionnaire on Google forms by clicking on "POST SURVEY" button.
                </h3>
                 <h3 class="my-5">
                    Please provide consistent and realistic answers to questions in the post-questionnaire. 
                    You can make changes to your responses until you complete the questionnaire. 
                    Please fill the questionnaires ONCE thanks.
                 <h3 class="text-danger mb-5">
                      If you have any question or you need help, please contact: <a href="https://mail.google.com" target="_blank">ochulaobariEmmanuel@gmail.com</a> Thank you.</h3>
                 </h3>

                <div>
             
               <div class="col-md-12">   
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSel6aM_SNj8ToomHWMFsDDVZPYxIAu6H1076rR_1T5lYF3Obw/viewform?vc=0&c=0&w=1" 
                        class="float-right" target="_blank"> <button type="submit" class="btn btn-secondary  btn-lg px-5">
                            <span style="font-size:18px;">POST SURVEY</span></button></a>
                    </div>
             </div>
            </section>
       </div>
   </div>
</div>

<footer id="colorlib-footer" class="mt-5">
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