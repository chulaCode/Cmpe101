@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-12">
       @if (session('status'))
         <div class="text-center alert alert-success">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
       @endif
          <section>
               
                <div class="text-right my-3 " style="text-weight:bold"><h4></h4>  </div>
                <div class="text-center text-capitalize ">
                    <h2 class="font-weight-bold">Introduction to computer course survey</h2>
                  
                    <hr>
                    <h4> 
                        The results of the following questionnaire will be use to check if game elements increase interaction and engagement.
                    </h4>
                    <hr>
                </div>
               
            </section>

            <section>
            <form method="post" action="{{route('survey.store')}}">
            @csrf

                <div class="body-top my-4">
                   
                        <h4 class="my-4"> Please if you've submitted survey before just enter your student number and click submit form thanks!</h4>
                        
                        <input id="" type="hidden" name="ques"value=""/>
                    
                        <h5 class="font-weight-bold my-3">Note: To answer this section 1(Strongly Disagree)-2(Disagree)-3(Neutral)- 4(Agree) - 5(Strongly Agree) choose  any of them.</h5>    
                        
                        <div class="table">
                            <table class="table table-bordered" id="">
                            
                                <thead>
                                    <tr>
                                            <th>Number</th>
                                            <th>Questions</th>
                                            <th>Strongly Agree 5</th>
                                            <th>Agree 4</th>
                                            <th>Neutral 3</th>
                                            <th>Disagree 2</th>
                                            <th>Strongly Disagree 1</th>
                                        </tr>
                                    
                                    </thead>
                                    <tbody id="">
                                    @foreach($result as $result)
                                    <tr id="">
                                        
                                        <td>{{$result->id}}</td>
                                        <td>{{$result->question}}</td>
                                        <input id="" type="hidden" name="ques{{$result->id}}"value="{{$result->id}}"/>
                                        <td><label class="radio-inline"><input type="radio" 
                                        name="option{{$result->id}}" value='5'checked></label></td>

                                        <td><label class="radio-inline"><input type="radio" 
                                        name="option{{$result->id}}"value='4' checked></label></td>

                                        <td><label class="radio-inline"><input type="radio" 
                                        name="option{{$result->id}}" value='3' checked></label></td>

                                        <td><label class="radio-inline"><input type="radio" 
                                        name="option{{$result->id}}" value='2'  checked></label></td>

                                        <td><label class="radio-inline"><input type="radio" 
                                        name="option{{$result->id}}" value='1' checked></label></td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                            </table>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                                            
                            <input type="number" class="form-control py-4" id="std" name="stdno" 
                            placeholder="Enter student number (No letters just numbers) and click submit to access the system" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" name="submit" value="course" class="btn btn-dark btn-lg ">Submit Form</button>
                        </div>
                    </div>
                                        
                <!--last question section-->
               
             </form>
            </section>
        </div>
    </div>
</div>
@endsection