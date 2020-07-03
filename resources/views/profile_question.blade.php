@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/practice.css') }}" rel="stylesheet">
<script src="{{ asset('js/practice.js') }}" defer></script>
@section('content')

 <div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
    @if (session('status'))
                <div class="alert alert-info">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
             @endif

        <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
              
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>INSTRUCTIONS</strong></h2>
                <div class="row">
                    <div class="col-md-12 mx-0">
                      <p> Please go through the instruction before proceeding to the quiz thanks</p>      
                      <a href="{{route('quiz',$student->id)}}"><button class="btn btn-primary btn-lg">Take quiz</button></a>
                    
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong></strong></li>
                                <li id="personal"><strong></strong></li>
                                <li id="personal2"><strong></strong></li>
                                <li id="payment"><strong></strong></li>
                                <li id="confirm"><strong></strong></li>
                            </ul> <!-- fieldsets -->
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <h4 class="text-dark">Thank you so much for agreeing to participate in this research i'm so grateful Thank you!</h4>
                                    </div><span class="mr-2"></span><input type="button" id="next1" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h4 class="text-dark">You have a total of 12 questions to attempt any wrong answer you pick 
                                    a suggestion will be given to you on how to get the next question right</h4>
                                    <h4 class="text-dark">After the attempts you'll be redirect to a score board</h4>
                                </div><span class="mr-2"></span><input type="button" id="next1" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                <h4 class="text-dark">One of the question requires you to convert a binary number to decimal e.g 000000011 = 3 in decimal </h4>
                                <h4 class="text-dark">The second type of question requires conversion from decimal to binary  e.g 4 = 00000100 in binary </h4>
                                
                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                <h4 class="text-dark">You have 50 seconds for each question when the time elapses a new question comes up</h4>
                                <h4 class="text-dark">When the number of attempts is over you'll be redirected to a page where you can check your score 
                                and a <span class="text-danger">FILL SURVEY</span> link will be visible <span class="text-success">PLEASE HELP US FILL THE SURVEY THANK YOU.</span>
                                Your feedback is important for our research thanks. </h4>
                                </div><input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                 <input type="button" id="next2" name="next" class="next action-button" value="Next" />
                            </fieldset>
                          
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Weldone !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                         <h4>You can proceed to take the quiz now!</h4>
                                        
                                        </div>
                                       
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
