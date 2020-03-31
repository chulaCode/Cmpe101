@extends('layouts.app')

@section('content')
<div id="particles-js">
   <div class="container-fluid">
        <div class="row">
         
                  <div class="sidebar col-md-3  col-lg-3 mr-lg-5">
                      
                        <div class="mb-3"> 
                             
                            <div id="profileimage"><img src="{{ $user->profileImage() }}" class="rounded-circle w-50 pb-2 mx-lg-5 mx-md-4" alt=""/></div>
                            <div class=" h4 mx-lg-5 px-lg-5 mx-md-4" id="username">  {{$user->username}}  </div>

                            <div id="edit"> <a href="/profile/{{$user->id}}"><button class="btn btn-primary mb-2 mx-lg-2 px-lg-5 mx-md-4">Go Back to Profile</button></a> </div>
                            <hr style="background:#5066D8;">
                            <div class="h5 my-2 ml-lg-5 pl-3" >
                              <i class="fa fa-trophy" aria-hidden="true"><span class="">  Recent Badge</span></i>
                            </div>
                            <div class="img ml-lg-5 " id="badge"></div>
                            <div class="img_badge my-1 ml-lg-5 pl-4 mb-3"></div>
                            <div class="mt-2">
                            <button type="button" class="btn btn-primary  my-4 ml-lg-4 px-lg-5 mx-md-4" data-toggle="modal" data-target="#rule">
                                Game rules
                            </button>
                                           
                            </div>
                                                            
                        </div>
                        <!-- end of col-3 -->
                   </div>  
               <!-- beginning of column 9 -->
               <div class="right-game col-lg-9 col-md-12 col-sm-12">
                    <div id="edit"> <a href="/profile/{{$user->id}}"><button class="btn btn-primary d-lg-none">Go Back to Profile</button></a> </div>
                        <div class="bar">
                            <span class="text-white">Running progress bar to track game progress from 0% to 100% </span>
                            <div class="progress">
                                <div id="dynamic" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span id="current-progress"></span>
                                </div>
                            </div>
                        </div>
                
                      <div class="middle col-lg-6 col-md-8 " style="margin-top:-30px">
                      
                         <div class="game mx-auto">
                             <form name="game" method="post" action="">
                                <table class=" t-game" id="myTable">
                                    <tr id="tr1">
                                        <td><input type="button"id="button1" value="0"class="b_game" name="btn1"  /></td>
                                        <td><input type="button" id="button2" value="0"class="b_game" name="btn2" /></td>
                                        <td><input type="button" id="button3"value="0"class="b_game" name="btn3" /></td>
                                        <td><input type="button" id="button4" value="0"class="b_game" name="btn4" /></td>
                                        <td><input type="button" id="button5" value="0"class="b_game" name="btn5" /></td>
                                        <td><input type="button" id="button6" value="1" class="b_game" name="btn6"/></td>
                                        <td><input type="button" id="button7"value="0"class="b_game" name="btn7"  /></td>
                                        <td><input type="button" id="button8" value="1"class="b_game" name="btn8" /></td>
                                        <td><input type="text" id="text1"value="5" style="text-align:center; font-weight:20px;background-color: #10140E;color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
                                    
                                    </tr>
                                    
                                    <tr>
                                        <td class="txt" id="vertical">128</td>
                                        <td class="txt"id="vertical">64</td>
                                        <td class="txt"id="vertical">32</td>
                                        <td class="txt"id="vertical">16</td>
                                        <td class="txt"id="vertical">8</td>
                                        <td class="txt"id="vertical">4</td>
                                        <td class="txt"id="vertical">2</td>
                                        <td class="txt"id="vertical">1</td>
                                    </tr>
                                </table>
                             </form>
                         </div>
                     </div>

                     <!-- end of col-6   -->
                      <div class=" last col-lg-3 col-md-4" style="margin-top:-30px">
                            <div id="clockdiv">
                                <div class=" ">
                                    <span id="timer">00</span>
                                    <div class="smalltext">Points</div>
                                </div>
                            </div>
                            <div class="alert alert-primary mt-5" role="alert">
                                 <span class="message" ></span>
                             </div>
                            
                        </div>
                   <!-- end of col-9 row   -->
             </div>
             </div>
               <!-- Button trigger modal 
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
                </button>-->

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><span style="color:#d48f56">Congrats you won!!</span></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <img class="w-100 h-50 mx-auto" src="{{asset('images/dance2.gif')}}" alt="">
                        
                        </div>
                        <div class="modal-footer">
                        <span class="modal-text text-dark" style="margin-right:30px;">You successfully got all the badges.</span>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="stop" class=" replay btn btn-info" data-dismiss="modal"></button>
                            
                        </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="lost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="exampleModalLabel"><span style="">Game over you lost.</span></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <img class="w-100 h-50 mx-auto" src="{{asset('images/sad.gif')}}" alt="">
                        
                        </div>
                        <div class="modal-footer">
                        <span class="modal-text text-dark text-bold" style="margin-right:70px;">Click on replay button to play again.</span>
                            <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal"></button>
                            
                        </div>
                        </div>
                    </div>
                </div>

                <!--modal for game rules--><!-- Button trigger modal -->

                <!-- Modal -->
                <div class="modal fade" id="rule" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Rules</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <strong><h4>1)</h4></strong> You have 10 guestions each correct matched answer you get 10 points
                        <strong><h4>2)</h4></strong> You have 40 seconds for each question 
                        <strong><h4>3)</h4></strong> You can only toogle button once to change your answer
                        <strong><h4>4)</h4></strong> To win game you must clear all lines i.e you must answer 10 question correctly
                        <strong><h4>5)</h4></strong> Rewards - you earn a bronze badge when you get 30 points, silver when you get 60points
                        gold when you get 90 points and you win game when you get 100 points.
                        <strong>Enjoy your game.</strong> 
                    </div>
                    <div class="modal-footer">
                        
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Understood</button>
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
@endsection