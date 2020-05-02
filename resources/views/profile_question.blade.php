@extends('layouts.app')

@section('content')

<div class="container my-4">
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

                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                               <td><h4>The test is only on binary to decimal conversion so focus on that </h4></td>
                            </tr>
                            <tr><td><h4>You have a total of 10 questions to answer</h4></td></tr>
                             <tr><td><h4>After the time elapses a new question comes on</h4></td></tr>
                             <tr><td><h4>You have 20 seconds first 5 questions and 10 seconds  for the last question</h4></td></tr>
                             <tr><td><h4>Please help fill survey after your done with with the quiz thank you!</h4></td></tr>
                             <tr><td><h4>Best of Luck!</h4></td></tr>
                             <tr><td>
                               <a href="{{route('survey.quiz',$student->id)}}"><button class="btn btn-secondary btn-lg mr-4">Please fill survey</button></a>
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
