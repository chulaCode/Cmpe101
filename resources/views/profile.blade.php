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
                               <td><h4>The test is only on binary to decimal conversion so focus on that </h4></td>
                            </tr>
                            <tr><td><h4>You have a total of 10 game questions to answer</h4></td></tr>
                             <tr><td><h4>Checkout video below on how to play</h4></td></tr>
                             <tr><th> <iframe width="850" height="380"
                                src="https://www.youtube.com/embed/7AJaPBpmzSo">
                             </iframe></th></tr>
                             <tr><td><h4>Please read the game rules carefully on game page to grasp what to do and expect</h4></td></tr>
                             <tr><td><h4>Please help fill survey after playing game link to survey is on the game page</h4></td></tr>
                             <tr><td><h4>Click on PRACTICE GAME to learn how to play or PLAY GAME to start game</h4></td></tr>
                             <tr><td>
                               <a href="/practice/{{$student->id}}"><button class="btn btn-secondary btn-lg mr-4">Practice game</button></a>
                               <a href="/game/{{$student->id}}"><button class="btn btn-secondary btn-lg">Play game</button></a>
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
