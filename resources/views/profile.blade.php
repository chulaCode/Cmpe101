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
                             <tr><td><h4> You'll be directed to login with your student number to access the game 
                             so we can keep tract of your engagement with the system.</h4></td></tr>
                             <tr><td>
                               <a href="{{route('postland')}}"><button class="btn btn-secondary btn-lg">Fill survey</button></a>
                               <a href="/practice"><button class="btn btn-secondary btn-lg mr-4">Practice game</button></a>
                              <button class="btn btn-secondary btn-lg" data-toggle="modal" data-target="#login">Play game</button>
                               </td>
                            </tr>
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form action="{{route('entrance')}}" method="post">
    @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Please login to access game</h5>
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
