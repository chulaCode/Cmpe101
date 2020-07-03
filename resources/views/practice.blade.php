@extends('layouts.app')
<link href="{{ asset('css/practice.css') }}" rel="stylesheet">
<script src="{{ asset('js/practice.js') }}" defer></script>
@section('content')
 <!--    
<div class="container-fluid">
    <div class="row justify-content-center">
       <div class="col-md-10" style="top:50px">
           <div class="mb-3">
                <a href="{{route('profile.show')}}"><button class="btn btn-primary mx-5">Go Back to Profile</button></a>
                <a href="/game"><button class="btn btn-primary mx-5">Go to main Game page</button></a>
                <h4 class="display text-success pull-right"></h4>
            </div>
            <div id="basis" clsas="mx-auto">
              
            </div>
        </div>
        -->
        <div class="container-fluid" id="grad1">
    <div class="row justify-content-center mt-0">
        <div class="col-11 col-sm-9 col-md-7 col-lg-9 text-center p-0 mt-3 mb-2">
        <a href="{{route('profile.show')}}"><button class="btn btn-primary mx-5 tutorial">Go Back to Profile</button></a>
        <a href="/game"><button class="btn btn-primary mx-5">Go to main Game page</button></a>
               
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2><strong>GAME TUTORIAL</strong></h2>
                <div class="row">
                    <div class="col-md-12 mx-0">
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>First game type</strong></li>
                                <li id="personal"><strong>Try it out yourself</strong></li>
                                <li id="personal2"><strong>Second game type</strong></li>
                                <li id="payment"><strong>Try it our yourself</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul> <!-- fieldsets -->
                            <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                   
                                  <div id="remove1">
        
                                  <div class="text-dark  d-block d-sm-none"><h3>Please view on your computer</h3></div>
                                  <div class="text-dark d-none d-md-block  d-lg-none"><h3>Please view on your computer</h3></div>
                
                                    <div class="text-dark mb-4 d-none d-lg-block d-lg-none">
                                       
                                        <h3>
                                        The first type of game question you'll have a decimal number e.g "5" in the blue box and 
                                        you need to calculate the bit number with 1's for example  4+1 which is bit with blue borders total 5
                                        which is equal to "5" the number in the blue text box at the right you 
                                        need to click on it to change it from 0 to 1. Click on next step to try it out for yourself.
                                        </h3>
                                        <hr>
                                    </div>
        
                                        <div class="game mx-auto d-none  d-lg-block d-lg-none">

                                                <form name="game" method="post" action="">
                                                <table class=" t-game " id="">
                                                    <tr id="tr1" class="mt-3">
                                                        <td><input type="button"id="button1" value="0"class="b_game" name="btn1"  /></td>
                                                        <td><input type="button" id="button2" value="0"class="b_game" name="btn2" /></td>
                                                        <td><input type="button" id="button3"value="0"class="b_game" name="btn3" /></td>
                                                        <td><input type="button" id="button4" value="0"class="b_game" name="btn4" /></td>
                                                        <td><input type="button" id="button5" value="0"class="b_game" name="btn5" /></td>
                                                        <td style="border-style:solid; color:#0275d8"><input type="button" id="button6" value="1" class="b_game" name="btn6"/></td>
                                                        <td><input   type="button" id="button7"value="0"class="b_game" name="btn7"  /></td>
                                                        <td style="border-style: solid; color:#0275d8"><input type="button" id="button8" value="1"class="b_game" name="btn8" /></td>
                                                        <td><input type="button" class="btext" id="text1"value="5" style="" name="text"/></td>
                                                    
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
                                            
                                            </div>

                                        </div>
                                    

                                </div><span class="mr-2">Click on next step to try out the first game type</span><input type="button" id="next1" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                <div class="text-dark  d-block d-sm-none"><h3>Please view on your computer</h3></div>
                                    <div class="text-dark d-none d-md-block  d-lg-none"><h3>Please view on your computer</h3></div>
             
                                    <div class="text-dark mb-4 d-none d-lg-block d-lg-none">
                                        
                                    <h3>
                                        Click on the button with blue borders to change it from 0 to 1 which is 4+1 that totals 5 
                                        it'll clear that game block because the selected answer matches the hex value of 5 
                                    </h3>
                                        <hr>
                                    </div>

                                        <div class="game mx-auto d-none d-lg-block d-lg-none">
                                       
                                                <table class="t-game" id="myTable">
                                                    
                                                <tr>
                                                    <td class="txt" id="vertical">128</td>
                                                    <td class="txt"id="vertical">64</td>
                                                    <td class="txt"id="vertical">32</td>
                                                    <td class="txt"id="vertical">16</td>
                                                    <td class="txt"id="vertical">8</td>
                                                    <td class="txt"id="vertical">4</td>
                                                    <td class="txt"id="vertical">2</td>
                                                    <td class="txt"id="vertical">1</td>
                                                    <td> <span  class="pull-right text-success display"></span></td>
                                                </tr>
                                               
                                            
                                            </table>
                                            
                                        </div>

                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                <div id="remove1">
                                    <div class="text-dark  d-block d-sm-none"><h3>Please view on your computer</h3></div>
                                    <div class="text-dark d-none d-md-block  d-lg-none"><h3>Please view on your computer</h3></div>
            
                                    <div class="text-dark mb-4 d-none d-lg-block d-lg-none">
                                       
                                        <h3>
                                        The second game type you'll be given binary number e.g "0 0 0 0 0 0 1 1" and you'r eexpected to find the 
                                        the hexidecimal equivalent by adding up it's bit numbers the bits with 1's for this game block the answer is 2+1 which is 3
                                        you'll write your answer in the empty blue text box. click on next step to try it out yourself.
                                        
                                        </h3>
                                        <hr>
                                    </div>

                                        <div class="game mx-auto d-none d-lg-block d-lg-none">

                                                <form name="game" method="post" action="">
                                                <table class=" t-game" id="">
                                                    <tr id="tr1" class="mt-3">
                                                        <td><input type="button"id="button1" value="0"class="b_game" name="btn1"  /></td>
                                                        <td><input type="button" id="button2" value="0"class="b_game" name="btn2" /></td>
                                                        <td><input type="button" id="button3"value="0"class="b_game" name="btn3" /></td>
                                                        <td><input type="button" id="button4" value="0"class="b_game" name="btn4" /></td>
                                                        <td><input type="button" id="button5" value="0"class="b_game" name="btn5" /></td>
                                                        <td style=""><input type="button" id="button6" value="0" class="b_game" name="btn6"/></td>
                                                        <td><input   type="button" id="button7"value="1"class="b_game" name="btn7"  /></td>
                                                        <td style=""><input type="button" id="button8" value="1"class="b_game" name="btn8" /></td>
                                                        <td><input type="text" class="btext" id="text1"value="3" style="" name="text"/></td>
                                                    
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
                                            
                                            </div>

                                        </div>
                                        </div>Click on next step to try out the second game type<input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                 <input type="button" id="next2" name="next" class="next action-button" value="Next Step" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                   
                                   <div class="text-dark mb-4">
                                        <h3>
                                            Add up the bit's with 1's and write it down in the empty text box then pres enter.
                                        </h3>
                                        <hr>
                                    </div>

                                    <div class="game mx-auto">
                                    
                                        <table class="t-game" id="myTable2">
                                                
                                            <tr>
                                                <td class="txt" id="vertical">128</td>
                                                <td class="txt"id="vertical">64</td>
                                                <td class="txt"id="vertical">32</td>
                                                <td class="txt"id="vertical">16</td>
                                                <td class="txt"id="vertical">8</td>
                                                <td class="txt"id="vertical">4</td>
                                                <td class="txt"id="vertical">2</td>
                                                <td class="txt"id="vertical">1</td>
                                                <td> <span  class="pull-right text-success display"></span></td>
                                            </tr>
                                            
                                        
                                        </table>
                                        
                                    </div>

                                </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Done?" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <h2 class="fs-title text-center">Weldone !</h2> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                         <h4>You can proceed to play the game now!</h4>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
