
@extends('layouts.app')
<script src="{{ asset('js/timer.js') }}" defer></script>
@section('content')
        
    <div class="container-fluid">
        <div class="row">
        <div class=" ml-4 text-dark mt-5 d-block d-sm-none"><h3>Please view on your computer</h3></div>
      
          <div class="col-md-2 col-sm-12 bg-secondary h-100 sidebar d-sm-none d-md-block">

                <br> <a href="{{route('profile.display',$user->id)}}"><button class="btn btn-dark my-4 ml-lg-4">Go Back to Profile</button></a>
            
                <hr class="bg-white">
                <div id="clockdiv" class="my-4 mb-5 " style="">            
                    <div class="ml-lg-5 time ">
                        <span id="timer">00:00</span>
                        <div class="smalltext">Timer</div>
                    </div>
                </div>
                <div class="mt-1"> 
                    <button class="btn btn-lg btn-dark mb-4 mt-4  p-lg-3  ml-lg-5" ><span>Score  {{$count_value->values*10}}</button>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br>
                <br><br><br><br><br><br>
         </div>
            <!--right -->
         <div class="col-md-9 offset-lg-3 mt-2 d-sm-none d-md-block">
                @if (session('status'))
                    <div class="alert alert-info">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                @endif

                <div class="row ml-md-5"> 
                     <div class="col-3 col-lg-3 "> 
                         <div class="text-dark wr mx-1">
                            <p class=" pl-2  font-weight-bold">Wrong</p>
                           
                            @if($count_value->wrong==0)
                                <div id="clockdiv" class="my-2">            
                                    <div class=" time ">
                                        <span id="">  {{$count_value->wrong}}</span>
                                        <div class="smalltext"></div>
                                    </div>
                                </div>                     
                            @else
                               <div id="clockdiv" class="my-2">            
                                    <div class="time ">
                                        <span id="">  {{$count_value->wrong}}</span>
                                        <div class="smalltext"></div>
                                    </div>
                                </div> 
                            @endif
                            
                         </div>
                      </div>
                      <div class="col-3 col-lg-3 ">
                         <div class=" text-dark at mx-1">
                           <p class=" pl-1 middle_side font-weight-bold">Attempts</p>
                            
                             <div id="clockdiv" class="my-2">            
                                    <div class="time ">
                                        <span id="attempt">  {{$count_value->attempts}}</span>
                                        <div class="smalltext"></div>
                                    </div>
                                </div>  
                           
                         </div>
                       </div>
                       <div class="col-3 col-lg-3 ">
                          <div class=" text-dark cr mx-1">
                            <p class="  pl-1 right_side font-weight-bold">correct</p>
                                @if($count_value->wrong==0)
                                    <div id="clockdiv" class="my-2">            
                                        <div class="time ">
                                            <span id="">  {{$count_value->right}}</span>
                                            <div class="smalltext"></div>
                                        </div>
                                    </div>                     
                                @else
                                <div id="clockdiv" class="my-2">            
                                        <div class="time ">
                                            <span id="">  {{$count_value->right}}</span>
                                            <div class="smalltext"></div>
                                        </div>
                                    </div> 
                                @endif
                          </div>

                      </div> 
                </div>
                <!--end of row for attempts-->
                <div class="ml-lg-5 mt-2">
                    <form class="form ml-2" name="myForm" action="{{route('post.quiz',$user->id)}}" method="POST">
                     @csrf
                    
                      @foreach($output as $questions)
                        <h4 class="text-dark text-uppercase mb-lg-4 mt-lg-2 font-weight-bold"id="question"> {{$questions->question}}</h4>
                        <input type="hidden" value=" {{$questions->id}}"  name="{{$questions->name}}"/>
                            <ul class="">
                               <li>
                                    <div class="inputGroup">
                                        <input id="radio1" value="{{$questions->value1}}" name="{{$questions->select}}" type="radio"/>
                                        <label for="radio1">{{$questions->option1}}</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="inputGroup">
                                        <input id="radio2" value="{{$questions->value2}}" name="{{$questions->select}}" type="radio"/>
                                        <label for="radio2">{{$questions->option2}}</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="inputGroup">
                                        <input id="radio3" value="{{$questions->value3}}" name="{{$questions->select}}" type="radio"/>
                                        <label for="radio3">{{$questions->option3}}</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="inputGroup">
                                        <input id="radio4" value="{{$questions->value4}}" name="{{$questions->select}}" type="radio"/>
                                        <label for="radio4">{{$questions->option4}}</label>
                                    </div>
                                </li>
                            </ul>
                         @endforeach
                         <!--<button type="button" name="submit" value="Submit Answer"  id="submit" class="btn btn-lg btn-block btn-primary ml-4">Submit Answer</button>-->
                         <input type="submit" name="submit" value="Submit Answer" id="submit-btn"/>
                            
                     </form>
                </div>
                <!-- end of form div-->
                <div>
                    <span class="font-weight-bold">Hint numbers for bits</span><img src="{{asset('images/bınaryNumber.png')}}" alt="" class="ml-5 mt-4" style="">
                </div>
            </div>
            <!--end of col-10 -->
        </div>
    </div>
    @endsection