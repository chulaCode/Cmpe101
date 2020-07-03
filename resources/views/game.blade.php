
@extends('layouts.app')
<script src="{{ asset('js/game.js') }}" defer></script>
@section('content')
        
    <div class="container-fluid">
        <div class="row">
        <div class=" ml-4 text-dark mt-5 d-block d-sm-none"><h3>Please view on your computer</h3></div>
           <div class="col-md-2 col-sm-12 bg-secondary h-100 bar">
        
            <div id="clockdiv" class="my-1 d-sm-none d-md-block">            
                    <div class="ml-5 time ">
                            <span id="point" style="background-color:#4a4a4b">00</span>
                            <div class="smalltext">Score</div>
                    </div>
                </div>
            
                <hr class="bg-white">
                <div class="img ml-lg-5 d-sm-none d-md-block" id="badge"></div>
                <div class="img_badge my-1 ml-lg-5 pl-4 mb-0 text-white"></div>
                <div class="mb-1"><button type="button" class="btn btn-dark mt-3 ml-5" data-toggle="modal" data-target="#tutorial">How to win badges</button> </div>
        
                <hr class="bg-white">
                <div id="clockdiv" class="mt-1 mb-1 d-sm-none d-md-block">            
                    <div class="ml-5 time">
                        <span id="timer">00:00</span>
                        <div class="smalltext">Timer</div>
                    </div>
                </div>
                <!--<a href="{{route('profile.show')}}"><button class="btn btn-dark my-4 ml-lg-5">Back to Profile</button></a>-->
                <br><br><br><br><br><br><br><br><br><br><br>
            </div>
            <div class="col-md-10 mt-2 col-sm-12 d-none d-lg-block" >
                <div class=" offset-1 ">
                <div> 
                    <h3 class="pull-right status  text-success" id="message1"></h3>
                    <h3 class="pull-right info  text-info" id="message2"></h3>
                    <h3 class="pull-right status2  text-success" id="message3"></h3>
                    <h3 class="pull-right info2  text-success" id="message4"></h3>
                    <h3 class="pull-right info3  text-success" id="message8"></h3>
                    <h3 class="pull-right status3  text-success" id="message5"></h3>
                    <h3 class="pull-right status4  text-success" id="message6"></h3>
                    <h3 class="pull-right status5  text-success" id="message7"></h3>
                    <h3 class="pull-right info4  text-danger" id="message9"></h3>
                </div>
                
                    <div class="bar ml-4">
                        <h4 class="text-dark">Game progress bar &nbsp;&nbsp;<i class="fa fa-check text-success" 
                        aria-hidden="true"></i> [<span id="right"></span>]  &nbsp;&nbsp;<i class="fa fa-times text-danger" 
                        aria-hidden="true"></i> [<span id="wrong"></span>] 
                          <span class="message text-danger  my-3 ml-2"></span>
                        </h4>
                        <div class="progress">
                            <div id="dynamic" class="progress-bar progress-bar-secondary progress-bar-striped active" role="progressbar" 
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%, background-color:black;">
                                <span id="current-progress"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-1">
                 <div class="row">
                   <div class="col-md-10">
                        <div class="card  ml-2" style="height:500px!important">
                            <div class="card-body">
                                <div class="game mx-auto">
                                    <form name="game" method="post" action="">
                                    <table class="t-game" class=""id="myTable" >
                                        
                                        
                                        <tr class="ml-lg-3">
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
                            <h3 class="pull-right info0  text-danger" id="message0"></h3>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <div>
                      <input type="button" id="start" class="btn btn-success my-3" value="start game"/>
                      <input type="button" id="playagain" class="btn btn-primary my-3" value="Play  Again"/>
                      </div>
                        <span class="mt-5 ml-2">Life</span>
                        <div class="lifes mt-2"> </div>
                        
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><span style="color:#d48f56">Congrats you won with a gold badge</span></h3>
               
            </div>
            <div class="modal-body">
            <img style="width:300px; height:300px; margin-left:45px" src="{{asset('images/dance2.gif')}}" alt="">
            <!--<img class="w-100 h-50 mx-auto" src="{{asset('images/dance2.gif')}}" alt="">-->
            </div>
            <div class="modal-footer">
            <a href="{{route('postland')}}" target="_blank"><button class="btn btn-dark">fill survey</button></a>
            
                <button class="btn btn-dark ml-1" id="scores_submit">Submit score to score board</button>
                <a href="{{route('score.board')}}" target="_blank"><button class="btn btn-success">View score board</button></a>
                <button type="button"  class=" replay btn btn-info"  id="stop" data-dismiss="modal">Replay</button>
            </div>
            </div>
        </div>
    </div>
    <!-- win with life-->
    <div class="modal fade" id="win" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel"><span style="color:#d48f56">Congrats you won!!</span></h2>
               
            </div>
            <div class="modal-body">
            <img style="width:300px; height:300px; margin-left:45px" src="{{asset('images/clap.gif')}}" alt="">
            <!--<img class="w-100 h-50 mx-auto" src="{{asset('images/dance2.gif')}}" alt="">-->
            
            </div>
            <div class="modal-footer"> 
            <a href="{{route('postland')}}" target="_blank"><button class="btn btn-dark">fill survey</button></a>
               
             <button class="btn btn-dark ml-1" id="score_submit">Submit score to score board</button>
             <a href="{{route('score.board')}}" target="_blank"><button class="btn btn-success">View score board</button></a>
             <button type="button" class="replay btn btn-info"  id="stop2" data-dismiss="modal">Replay</button>
            </div>
            </div>
        </div>
    </div>
   <!-- lost -->
    <div class="modal fade" id="lost" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-dark" id="exampleModalLabel"><span style="">Game over you lost.</span></h2>
                
            </div>
            <div class="modal-body">
            <img style="width:300px; height:300px; margin-left:45px" src="{{asset('images/sad.gif')}}" alt="">
            <!--<img class="w-100 h-50 mx-auto" src="{{asset('images/sad.gif')}}" alt="">-->
            
            </div>
            <div class="modal-footer">
            <a href="{{route('postland')}}" target="_blank"><button class="btn btn-dark">fill survey</button></a>
            
                <button class="btn btn-primary" id="s_submit" data-dismiss="modal">Submit score to score board</button>
                <a href="{{route('score.board')}}" target="_blank"><button class="btn btn-success">View score board</button></a>
                <button type="button" class="btn btn-secondary ml-3"  id="close" data-dismiss="modal">Replay</button>
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
                    <h2 class="modal-title" id="staticBackdropLabel">Rules</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <!--<span aria-hidden="true">&times;</span>-->
                    </button>
                </div>
                <div class="modal-body">
                    <strong><h4>1)</h4></strong> Please ensure you check tutorial so you can know how to play
                    <strong><h4>2)</h4></strong> Click on "how to win badge" button to know how different badges can be won
                    <strong><h4>3)</h4></strong> To win game you need to ensure you have at least one life after all game blocks finishes, you need 
                    to clear all 12 game block to win game with a gold badge, You have a total of 12 game blocks. <br>
                
                    <strong><h4>Enjoy your game.</h4></strong> 
                </div>
                <div class="modal-footer">
                <a href="/practice"> <button type="button" class="btn btn-primary mt-1">Checkout tutorial </button></a>
                    <button type="button" class="btn btn-primary" id="rule" data-dismiss="modal">Understood</button>
                </div>
            </div>
        </div>
    </div>


<!-- Modal login -->
<div class="modal fade" id="login2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form action="{{route('entrance')}}" method="post">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please login to replay game</h5>
       
      </div>
      <div class="modal-body">
         <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Student number') }}</label>

            <div class="col-md-6">
                <input id="stdnumber" type="text" class="form-control @error('studentNo') is-invalid @enderror" 
                name="studentNo" value="{{ old('stdnumber') }}" minlength="8" maxlength="8" 
                required autocomplete="studentNo" placeholder="Enter your student number"autofocus>

                @error('studentNo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
   </form>
  </div>
</div>

<!-- tutorial -->
<div class="modal fade" id="tutorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="exampleModalLabel">How to win badges</h4> 
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                 </div>
                 <div class="modal-body">
                  <div class="row">
                      <div class="col-4">
                          <img src="{{asset('images/bronze.png')}}" alt="" class="w-50" style="">
                          <p>To win a bronze badge you need to get 30 points.
                            </p>
                        </div>
                      <div class="col-4">
                         <img src="{{asset('images/silver1.png')}}" alt="" class="w-50" style="">
                         <p>To win a Silver badge you need to get 80 points</p>
                      
                      </div>
                      <div class="col-4">
                         <img src="{{asset('images/gold1.png')}}" alt="" class="w-50" style="">
                         <p>To win a Gold badge you need to finish the game by clearing all the blocks 12 in number without failing anyone</p>
                      
                      </div>
                  </div>
                          
                </div>
           </div>
     </div>
 </div>

@endsection
