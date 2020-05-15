
@extends('layouts.app')
<script src="{{ asset('js/game.js') }}" defer></script>
@section('content')
        
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-2 bg-secondary h-100 bar">
            <br> <a href="{{route('postland')}}" target="_blank"><button class="btn btn-dark mb-4 mt-4 px-4 p-lg-2 ml-lg-4" data-toggle="modal" data-target="#score">Please fill survey</button></a>
            
           <div id="clockdiv" class="my-3">            
                <div class="ml-5 time ">
                        <span id="point" style="background-color:#4a4a4b">00</span>
                        <div class="smalltext">Score</div>
                </div>
            </div>
            <hr class="bg-white">
            <div class="img ml-lg-5 " id="badge"></div>
            <div class="img_badge my-3 ml-lg-5 pl-4 mb-4 text-white"></div>
             <hr class="bg-white">
            <div id="clockdiv" class="mt-2 mb-3">            
                <div class="ml-5 time ">
                    <span id="timer">00:00</span>
                    <div class="smalltext">Timer</div>
                </div>
            </div>
            <a href="{{route('profile.show')}}'"><button class="btn btn-dark my-4 ml-lg-5">Back to Profile</button></a>
             <br><br><br><br><br>
            </div>
            <div class="col-md-10 mt-4">
                <div class=" offset-1">
                    <div class="bar ml-4">
                        <h4 class="text-dark">Life bar (clear first 5 blocks and earn 10 extra life and win game with 90 points and 100 life)</h4>
                        <div class="progress">
                            <div id="dynamic" class="progress-bar progress-bar-secondary progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%, background-color:black;">
                                <span id="current-progress"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 offset-1">
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
                <button type="button" id="stop" class=" replay btn btn-info" data-dismiss="modal">Replay</button>
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
             <button type="button" id="stop" class=" replay btn btn-info" data-dismiss="modal">Replay</button>
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
                <button type="button" id="close" class="btn btn-secondary ml-3" data-dismiss="modal">Replay</button>
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
                    <strong><h4>1)</h4></strong> You have to wait for 20seconds after clicking on start game
                    <strong><h4>2)</h4></strong> If you live game page you'll loose your progress
                    <strong><h4>3)</h4></strong> You have 20seconds to answer each block for the first 5 blocks
                    <strong><h4>4)</h4></strong> You have 10seconds to answer the last 5 blocks
                    <strong><h4>5)</h4></strong> To win game you need to get 100 points 10 point for each block answered correctly
                    <strong><h4>6)</h4></strong> If you answer first 5 block correctly you get an extra live meaning you'll win game when you clear 9 blocks
                    <strong><h4>7)</h4></strong> You get 10 amount of life when you clear each block and 10 extra when you clear first 5 blocks without any failure
                    <strong><h4>8)</h4></strong> If you fail to clear any of the first 3 blocks you'll loose game early
                    <strong><h4>9)</h4></strong> Rewards - you earn a silver badge when you clear first 5 blocks with failure and get 60 life.
                    <strong><h4>10)</h4></strong> Rewards - you earn a gold badge when you win game with 100 points.
                    <strong><h4>11)</h4></strong> Note - score submission to score board is optional.
                     
                    <strong>Enjoy your game.</strong> 
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-primary" id="start" data-dismiss="modal">Start Game</button>
                </div>
            </div>
        </div>
    </div>

@endsection