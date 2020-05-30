@extends('layouts.app')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section('content')
<div class="container my-5" style="margin-bottom:10rem">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('status'))
                <div class="alert alert-info">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                </div>
             @endif
            <div class="card">
                <div class="card-header "><h2>{{ __('Instructions') }}</h2>
                  <!--<a href=""><span class="pull-right" style="margin-top:-2rem; cursor:pointer;">Game page</span></a>-->
                 
                </div>

                <div class="card-body ">
                <div class=" text-dark d-block d-sm-none"><h3>Please view on your computer</h3></div>
      
                    <table class="table table-striped d-sm-none d-md-block">
                        <tbody>
                            <tr><td><h4>You have a total of 10 questions to attempt any wrong answer you pick 
                            a suggestion will be given to you on how to get the next question right</h4></td></tr>
                            <tr><td><h4>After 10 attempt you'll be redirect back to this page you can check the quiz page again for your score</h4></td></tr>
                             <tr><td><h4>You have 30 seconds to answer each question you can see your time count at the left side of the quiz page</h4></td></tr>
                             <tr><td><h4>After the 30second finishes another question is displayed and if don't pick 
                             any answer you'll fail the question automatically.</h4></td></tr>
                             <tr><td><h4>You can attempt the quiz as many times you want till you master the subject.</h4></td></tr>
                             <tr><td><h4>To retake the quiz you'll need to login with your student number just so we can know if the quiz was engaging</h4></td></tr>
                             <tr><td><h4>You will need to fill out the post survey after your done with the interactive quiz by 
                             clicking the FILL SURVEY BUTTON.</h4></td></tr>
                             
                             <tr><td><h4>Best of Luck!</h4></td></tr>
                             <tr><td>
                               <a href="{{route('postlanding')}}" target="_blank"><button class="btn btn-secondary btn-lg mr-4">Please fill survey</button></a>
                               <a href="{{route('quiz',$student->id)}}"><button class="btn btn-secondary btn-lg">Take quiz</button></a>
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
