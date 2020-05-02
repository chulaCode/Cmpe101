@extends('layouts.app')
<script src="{{ asset('js/practice.js') }}" defer></script>
@section('content')
     
<div class="container-fluid">
    <div class="row">
       <div class="col-md-2 bg-secondary h-100  bar">
          <br><br> <a href="/profile/{{$user->id}}"><button class="btn btn-dark mb-2 ml-4">Go Back to Profile</button></a><br><br>
          <div id="clockdiv" class="my-2">            
             <div class="ml-5 time ">
                    <span id="point" style="background-color:#4a4a4b">00</span>
                    <div class="smalltext">Score</div>
             </div>
          </div>
          <br><br><br> <hr class="bg-white"> <br>
          <div id="clockdiv" class="my-2">            
             <div class="ml-5 time ">
                <span id="timer">00:00</span>
                <div class="smalltext">Timer</div>
             </div>
          </div><br><br><br>
          <br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div class="col-md-10 mt-4">
             <div class=" offset-1">
                 <div class="text-dark"><h3>Note: You need to wait for 15 seconds to start game when time count down begins</h3><hr></div>
                <div class="bar ml-5 mb-3">
                    <h4 class="text-dark">Running progress bar to track game progress from 0% to 100% </h4>
                    <div class="progress">
                        <div id="dynamic" class="progress-bar progress-bar-secondary progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%, background-color:black;">
                            <span id="current-progress"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 offset-1">
            
                <div class="game mx-auto">
                    <form name="game" method="post" action="">
                    <table class=" t-game" id="myTable">
                        <tr id="tr" class="mt-3">
                            <td><input type="button"id="button1" value="0"class="b_game" name="btn1"  /></td>
                            <td><input type="button" id="button2" value="0"class="b_game" name="btn2" /></td>
                            <td><input type="button" id="button3"value="0"class="b_game" name="btn3" /></td>
                            <td><input type="button" id="button4" value="0"class="b_game" name="btn4" /></td>
                            <td><input type="button" id="button5" value="0"class="b_game" name="btn5" /></td>
                            <td style="border-style:solid; color:#0275d8"><input type="button" id="button6" value="1" class="b_game" name="btn6"/></td>
                            <td><input type="button" id="button7"value="0"class="b_game" name="btn7"  /></td>
                            <td style="border-style: solid;;color:#0275d8"><input type="button" id="button8" value="1"class="b_game" name="btn8" /></td>
                            <td><input type="text" class="btext" id="text1"value="5" style="" name="text"/></td>
                        
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

        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel"><span style="color:#d48f56">Your Good To Go...</span></h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        
           <img style="width:300px; height:300px; margin-left:45px" src="{{asset('images/clap.gif')}}" alt="">
        
        </div>
        <div class="modal-footer">
         <button type="button" class="replay btn btn-info" id="play" data-dismiss="modal">Replay</button></a>
  
          <a href="/game/{{$user->id}}"><button type="button" class="replay btn btn-info" data-dismiss="modal">Play game</button></a>
  
        </div>
        </div>
    </div>
</div>


<div class="modal fade" id="loose" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel"><span style="color:#d48f56"></span></h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        <h3>Try again till you master it..</h3>
        
        
        </div>
        <div class="modal-footer">
      
          <button type="button" class="replay btn btn-info" id="play" data-dismiss="modal">Replay</button></a>
  
        </div>
        </div>
    </div>
</div>
@endsection
