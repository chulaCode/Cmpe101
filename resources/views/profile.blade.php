@extends('layouts.app')
@section('content')

<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
        @if(Session::has('message'))
              <div class="alert alert-danger text-center">
              {{Session::get('message')}}
              <button type="button" class="close" 
              data-dismiss="alert">&times;</button>
              </div>
           @endif
           @if(isset($errors)&&count($errors)>0)
                <div class="alert alert-danger text-center">
                <button type="button" class="close" 
              data-dismiss="alert">&times;</button>
                  <ul>
                      @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                      @endforeach
                  </ul>
                 
                </div>
            @endif

            <div class="card">
                <div class="card-header "><h2>{{ __('Instructions') }}</h2>
                  <!--<a href=""><span class="pull-right" style="margin-top:-2rem; cursor:pointer;">Game page</span></a>-->
                </div>

                <div class="card-body">
                <div class=" text-dark d-block d-sm-none"><h3>Please view on your computer</h3></div>
      
                    <table class="table table-striped d-sm-none d-md-block">
                        <tbody>
                            <tr>
                               <td><h4>Check out video on how to play the game</h4></td>
                            </tr>
                             <tr><th> <iframe width="850" height="380"
                                src="https://www.youtube.com/embed/7AJaPBpmzSo">
                             </iframe></th></tr>
                             <tr><td><h4>Please help fill survey after playing game. Link to survey wıll appear when your done playıng the game.
                             another link to survey is on  the scoreboard page thanks.</h4></td></tr>
                             <tr></td>
                               <a href="/practice"><button class="btn btn-secondary btn-lg mr-4">Practice game</button></a>
                              <a href="{{route('profile.game')}}"><button class="btn btn-secondary btn-lg">Play game</button></a>
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
