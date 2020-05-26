@extends('layouts.app')

@section('content')

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header "><h2>{{ __('Instructions') }}</h2>
                  <!--<a href=""><span class="pull-right" style="margin-top:-2rem; cursor:pointer;">Game page</span></a>-->
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                               <td><h4>Detailed game rule is at the game page when you proceed to game 
                               You'll be prompted to read the game rule before starting game please read the 
                               instructions properly</h4></td>
                            </tr>
                            <tr><td><h4>You can check the game practice video below to see how the game is played</h4></td></tr>
                             <tr><td><h4>After watching video click on "PRACTICE GAME"so you can try out what you've watched
                             to see if you know how to play it</h4></td></tr>
                             <tr><th> <iframe width="850" height="380"
                                src="https://www.youtube.com/embed/7AJaPBpmzSo">
                             </iframe></th></tr>
                             <tr><td><h4>Also the game rule at the game page show you what to expect after your action when playing</h4></td></tr>
                             <tr><td><h4>After you're done reading the game rule to start the game you'll need to click on the start button 
                             down below and wait for the time count to begin to start playing</h4></td></tr>
                             <tr><td><h4>You're to expect 10 game blocks in total other detail are on the game page</h4></td></tr>
                            
                             <tr><td><h4>Please help fill survey after playing game link to survey is on the game page "please fill survey"
                             another link to survey is here too the "Fill survey" button</h4></td></tr>
                             <tr><td><h4>Click on PRACTICE GAME to learn how to play or PLAY GAME to start game</h4></td></tr>
                             <tr><td>
                             <tr><td>
                               <a href="{{route('postland')}}"><button class="btn btn-secondary btn-lg">Fill survey</button></a>
                               <a href="/practice"><button class="btn btn-secondary btn-lg mr-4">Practice game</button></a>
                               <a href="/game"><button class="btn btn-secondary btn-lg">Play game</button></a>
                               </td>
                            </tr>
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
