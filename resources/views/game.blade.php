
@extends('layouts.app')
<script src="{{ asset('js/game.js') }}" defer></script>
@section('content')
        
    <div class="container-fluid">
        <div class="row">
        <div class=" ml-4 text-dark mt-5 d-block d-sm-none"><h3>Please view on your computer</h3></div>
        <div class="col-md-2 col-sm-12 bg-secondary h-100 bar">
        
            <br> <a href="{{route('postland')}}" target="_blank"><button class="btn btn-dark my-4  px-4 p-lg-2 ml-lg-5" data-toggle="modal" data-target="#score">Please fill survey</button></a>
            
           <div id="clockdiv" class="my-3 d-sm-none d-md-block">            
                <div class="ml-5 time ">
                        <span id="point" style="background-color:#4a4a4b">00</span>
                        <div class="smalltext">Score</div>
                </div>
            </div>
           
            <hr class="bg-white">
            <div class="img ml-lg-5 d-sm-none d-md-block" id="badge"></div>
            <div class="img_badge my-3 ml-lg-5 pl-4 mb-4 text-white"></div>
             <hr class="bg-white">
            <div id="clockdiv" class="mt-3 mb-3 d-sm-none d-md-block">            
                <div class="ml-5 time ">
                    <span id="timer">00:00</span>
                    <div class="smalltext">Timer</div>
                </div>
            </div>
            <!--<a href="{{route('profile.show')}}"><button class="btn btn-dark my-4 ml-lg-5">Back to Profile</button></a>-->
             <br><br><br><br><br><br><br>
            </div>
            <div class="col-md-10 mt-2 col-sm-12 d-none d-lg-block" >
                <div class=" offset-1 ">
                <h5>NOTE: FOR GAME BLOCK 6 WITH HEX NUMBER "7" YOU NEED TO WAIT FOR "5 SECONDS" TILL THE TIME FOR BLOCK 5 HEX NUMBER
                "23" FINISHES BEFORE CLICKING ON THE DIGIT TO CHOOSE YOUR ANSWER, IF YOU DON'T WAIT YOU'LL LOOSE 1 LIFE EVEN IF 
                YOUR ANSWER IS RIGHT. </h5><hr>
                    <div class="bar ml-4">
                        <h4 class="text-dark">Game progress bar (Win extra life by clearing first 3 and 6 game block)
                          <span class="message text-danger  my-3 ml-2"></span>
                        </h4>
                        <div class="progress">
                            <div id="dynamic" class="progress-bar progress-bar-secondary progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%, background-color:black;">
                                <span id="current-progress"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-1">
                 <div class="row">
                   <div class="col-md-10">
                        <div class="card h-75 ml-5">
                            <div class="card-body">
                                <div class="game mx-auto">
                                    <form name="game" method="post" action="">
                                    <table class="t-game" class=""id="myTable" >
                                        <tr id="tr" class="">
                                            <td><input type="button"id="button1" value="0"class="b_game" name="btn1"  /></td>
                                            <td><input type="button" id="button2" value="0"class="b_game" name="btn2" /></td>
                                            <td><input type="button" id="button3"value="0"class="b_game" name="btn3" /></td>
                                            <td><input type="button" id="button4" value="0"class="b_game" name="btn4" /></td>
                                            <td><input type="button" id="button5" value="0"class="b_game" name="btn5" /></td>
                                            <td style="border-style:solid; color:#0275d8"><input type="button" id="button6" value="1" class="b_game" name="btn6"/></td>
                                            <td><input type="button" id="button7"value="0"class="b_game" name="btn7"  /></td>
                                            <td style="border-style: solid;;color:#0275d8"><input type="button" id="button8" value="1"class="b_game" name="btn8" /></td>
                                            <td><input type="text" class="btext" id="text1"value="5" style="text-align:center;font-weight:30px;
                                            background-color:#0275d8;color:white;width:55px; margin-top:-2px;height:45px;line-height: 45px; border-radius: 7px;" name="text"/></td>
                                        
                                        </tr>
                                        
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
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div id="clockdiv" class="my-2 d-sm-none d-md-block">            
                            <div class="ml-5 time ">
                                    <span id="life" style="background-color:#4a4a4b">0</span>
                                    <div class="smalltext">LIFE</div>
                            </div>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <img style="width:300px; height:300px; margin-left:45px" src="{{asset('images/dance2.gif')}}" alt="">
            <!--<img class="w-100 h-50 mx-auto" src="{{asset('images/dance2.gif')}}" alt="">-->
            </div>
            <div class="modal-footer">
        
                <button class="btn btn-dark ml-3" id="scores_submit">Submit score to score board</button>
                <a href="{{route('score.board')}}" target="_blank"><button class="btn btn-success">View score board</button></a>
                <button type="button" id="stop" class=" replay btn btn-info" data-toggle="modal" data-target="#login2" data-dismiss="modal">Replay</button>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <img style="width:300px; height:300px; margin-left:45px" src="{{asset('images/dance2.gif')}}" alt="">
            <!--<img class="w-100 h-50 mx-auto" src="{{asset('images/dance2.gif')}}" alt="">-->
            
            </div>
            <div class="modal-footer">    
             <button class="btn btn-dark ml-3" id="score_submit">Submit score to score board</button>
             <a href="{{route('score.board')}}" target="_blank"><button class="btn btn-success">View score board</button></a>
             <button type="button" id="stop" class="replay btn btn-info" data-toggle="modal" data-target="#login2" data-dismiss="modal">Replay</button>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <img style="width:300px; height:300px; margin-left:45px" src="{{asset('images/sad.gif')}}" alt="">
            <!--<img class="w-100 h-50 mx-auto" src="{{asset('images/sad.gif')}}" alt="">-->
            
            </div>
            <div class="modal-footer">
            
                <button class="btn btn-primary" id="s_submit" data-dismiss="modal">Submit score to score board</button>
                <a href="{{route('score.board')}}" target="_blank"><button class="btn btn-success">View score board</button></a>
                <button type="button" id="close" class="btn btn-secondary ml-3" data-toggle="modal" data-target="#login2" data-dismiss="modal">Replay</button>
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
                    <strong><h4>1)</h4></strong> You have to wait for 20seconds after clicking on start game for game to start
                    <strong><h4>2)</h4></strong> If you live game page you'll loose your progress so stay on game page still game is finished
                    <strong><h4>3)</h4></strong> You have 20seconds to answer each block for the first 5 blocks
                    <strong><h4>4)</h4></strong> You have 10seconds to answer the last 5 blocks
                    <strong><h4>5)</h4></strong> To win game you need to get 100 points 10 point for each block answered correctly
                    <strong><h4>6)</h4></strong> If you answer first 5 block correctly you get an extra live meaning you'll win game when you clear 9 blocks
                    <strong><h4>7)</h4></strong> You get 1 live (10 on life bar) when you clear each block and 1 extra live (10 on life bar) when you clear first 5 blocks without any failure
                    <strong><h4>8)</h4></strong> If you fail to clear any of the first 3 blocks you'll loose game early
                    <strong><h4>9)</h4></strong> Any block you fail to clear and the time elapses the block will be locked so you can't answer it again
                    <strong><h4>10)</h4></strong> Rewards - you earn a silver badge when you clear first 5 blocks without failure and get 6 life (60 on life bar) you can track
                    your life with the blue life bar.
                    <strong><h4>11)</h4></strong> Rewards - you earn a gold badge when you win game with 100 points.
                    <strong><h4>12)</h4></strong> Note - score submission to score board is optional.
                    <strong><h4>13)</h4></strong> Note - To submit score you'll need to enter your name so you can track yourself
                    and others on the score board.
                    <strong><h4>14)</h4></strong> Note - you'll need to click on the submit score button to submit score.
                    <strong><h4>15)</h4></strong> Note - you'll need to login again with your student number to replay so we can know how engaging you where thanks..
                    
                    <strong>Enjoy your game.</strong> 
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-primary" id="start" data-dismiss="modal">Start Game</button>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
@endsection
