<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cmpe 101') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/particle.js') }}" defer></script>
    <script src="{{ asset('js/game.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/background.css') }}" rel="stylesheet">
   <!-- <link href="{{ asset('css/popup.css') }}" rel="stylesheet">-->
   <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
 
</head>
<body>
   <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
           
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Cmpe 101') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
               
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                
                </div>
            </div>
        
        </nav>
       
<div id="particles-js"></div>
<div class="container-fluid">
            <div class="row">
         
                  <div class="sidebar col-md-3 col-sm-12 col-lg-3 mr-5">
                      
                     <div class="mb-3"> 
                        
                        <div id="profileimage"><img src="{{ $user->profileImage() }}" class="rounded-circle w-50 pb-2 mx-lg-5 mx-md-4" alt=""/></div>
                        <div class=" h4 mx-lg-5 px-lg-5 mx-md-4" id="username">  {{$user->username}}  </div>

                        <div id="edit"> <a href="/profile/{{$user->id}}"><button class="btn btn-danger mb-2 mx-lg-2 px-lg-5 mx-md-4">Go Back to Profile</button></a> </div>
                        <hr>
                        
                         <div class="mt-2">
                             <p class="text-dark"> Note: You have maximum of 10 attempts in all and 2 minutes for each question! </p>
                         </div>
                                                        
                     </div>
          <!-- end of col-3 -->
                   </div>
                   <!-- closing tag for row-->
              </div>
                 
          <!-- beginning of column 9 -->
          <div class="row">
              <div class=" right col-lg-8 col-md-9 col-sm-12 ">
                 <div class="game mx-auto">
                    <form name="game" method="post" action="">
                       <table class=" t-game" id="myTable">
                         <tr id="tr1">
                         <td><input type="button"id="button1" value="0"class="b_game" name="btn1"  onclick="play(this)"/></td>
                         <td><input type="button" id="button2" value="0"class="b_game" name="btn2"  onclick="play(this)"/></td>
                         <td><input type="button" id="button3"value="0"class="b_game" name="btn3"  onclick="play(this)"/></td>
                         <td><input type="button" id="button4" value="0"class="b_game" name="btn4"  onclick="play(this)"/></td>
                         <td><input type="button" id="button5" value="0"class="b_game" name="btn5" onclick="play(this)"/></td>
                         <td><input type="button" id="button6" value="0" class="b_game" name="btn6"  onclick="play(this)"/></td>
                         <td><input type="button" id="button7"value="0"class="b_game" name="btn7"  onclick="play(this)"/></td>
                         <td><input type="button" id="button8" value="0"class="b_game" name="btn8"  onclick="play(this)"/></td>
                         <td><input type="text" id="text1"style="text-align:center; font-weight:20px;background-color: #10140E;color:white;width:45px; margin-top:-5px;height:30px;line-height: 30px; border-radius: 3px;" name="text"/></td>
                       
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

             <!-- end of col-9   -->
             </div>
      <!-- end of row -->
          </div>
    </div>
    
<body>
</html>