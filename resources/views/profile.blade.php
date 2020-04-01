@extends('layouts.app')

@section('content')
      <div id="particles-js">
         <div class="container-fluid">
            <div class="row">
                  <div class="sidebar col-lg-3 col-md-12">
                      
                     <div class="mb-3"> 
                        
                        <div id="profileimage"><img src="{{ $user->profileImage() }}" class="rounded-circle w-50 pb-2 mx-lg-5 mx-md-4" alt=""/></div>
                        <div class=" h4 mx-lg-5 px-lg-5 mx-md-4" id="username">  {{$user->username}}  </div>

                        <div id="edit"> <a href="#"><button class="btn btn-primary mb-3 mx-lg-5 px-lg-4 mx-md-4">Static Profile</button></a> </div>
                        
                        <hr>
                        <p> Click on the play binary game to play game so you can earn points and badges Tips button is a guide to how</p>
                        <div><a href="/game/{{$user->id}}"><button class="btn btn-primary mx-lg-5 px-lg-3 mx-md-4 my-4">Play Binary Game</button></a> </div>
                     </div>
          <!-- end of col-3 -->
                   </div>
                   <!-- closing tag for row-->
              </div>
                 
          <!-- beginning of column 9 -->
          <div class=" right col-md-9  col-sm-12">
             
               <div class="row"> 
                  <div class="col-md-9 col-9 col-sm-10">
                     @if (session('status'))
                        <div class="alert alert-info">
                           {{ session('status') }}
                           <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                     @endif
                    <!-- <h5 ml-4><a href="/profile/create">Add New Post</a></h5>-->
                  </div>
               </div>
                    <div class="notes my-2"> 

                        <div class="instruction mr-lg-5 pr-lg-5" style="">
                              <h2 class="text-white inst  mr-lg-5 pr-lg-5" style="">INSTRUCTIONS</h2>
                              <hr class="bg-white ">
                              <div class="mt-4 text-white">
                                 <h3 class=""> 
                                 1) Check out lecture note on binary numbering system from course moodle <a href="https://moodle.ciu.edu.tr/course/view.php?id=17" target="_blank">Cmpe 101 notes</a>
                                 </h3 >
                                 <h3 class="my-3">
                                 2) Focus on just binary to decimal conversion because the survey and questions is just on binary to decimal conversion
                                 </h3>
                                 <h3>
                                 3) You have 40 seconds for each game question
                                 </h3>
                                 <h3 class="my-3">
                                 4) After studying lecture notes you can proceed to play game
                                 </h3>
                                 <h3 class="my-3">
                                 5) Checkout game rules on game page before starting game GOOD LUCK!
                                 </h3>
                              
                              </div>
                           
                              <div class="d-lg-none col-12 d-flex justify-content-center mt-1">
                                 <a href="/game/{{$user->id}}">
                                    <button class="btn btn-primary ">Play Binary Game</button>
                                 </a>
                              </div>
                        
                        </div>
                 </div>
         
          <!-- end of col-9   -->
         </div>
      
      <!-- end of row -->
     
   </div>
    </section>

    <section>
       <!-- footer -->
      
    </section>
@endsection

