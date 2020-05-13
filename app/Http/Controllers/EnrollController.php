<?php

namespace App\Http\Controllers;
Use App\User;
Use App\Courses;
Use App\survey_questions;
Use App\surveys;
Use App\students;
use App\post_surveys;
use App\Quiz_survey;
use App\counts;
use Auth;
use Session;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    
    public function index(Request $request)
    {
        return view('pretest');
   }
   public function survey(){

     return view('survey');
   }
   public function pretest()
   {
     return view("pretest2");
   }
   public function consent()
   {
       return view("quiz_survey");
   }
   public function store(Request $request)
   {

    if($request->submit == "course")
    {
      $name=$request->get('stdno');
      $user=(integer)$name;
      $number=(integer)$value =substr($name,-1);
      if(($number%2)==0)
           return redirect()->route('survey.show');
       else
          return redirect()->route('consent');
  
    }
   
   }
   public function land()
   {
       return view("land");
   }
   public function landing()
   {
       return view("landing");
   }
}

   /*
   public function postSurvey($id){
      $count=1;
        $result= survey_questions::where('number',2)->get();
        return view('post_survey',compact('result','id','count'));
   }


   public function post($id,Request $request){
      // dd($request->input('ques6'));
    $result= survey_questions::where('number',2)->get();
    $user= students::select('studentNo')->where('id',$id)->first();
     $std=$user->studentNo;
    if($request->submit == "course")
    {
    
      $exist_result = post_surveys::where('studentNo',$std)->exists();
      if(!$exist_result){
       
    
                foreach($result as $value)
                { 
                    $save=post_surveys::create([
                        'question_id'=> $request->input('ques'.$value->id),
                        'answer'=>  $request->input('option'.$value->id),
                        'studentNo'=>$std,
            
                    ]);
                    
                }
                if($save){
                   
                    return redirect()->back()->with('status', 'THANK YOU FOR FILLING THE SURVEY');
                }

        }  
        else{
           return redirect()->back()->with('status','YOU HAVE ALREADY SUBMITTED A SURVEY');
        }
        
    }
  }
  public function quiz($id){
    $count=1;
    $result= survey_questions::where('number',3)->get();
    return view('post_survey',compact('result','id','count'));
  }
  public function quiz_post($id){

    $result= survey_questions::where('number',3)->get();
    $user= students::select('studentNo')->where('id',$id)->first();
     $std=$user->studentNo;
    if($request->submit == "course")
    {
    
      $exist_result = Quiz_survey::where('studentNo',$std)->exists();
      if(!$exist_result){
       
    
                foreach($result as $value)
                { 
                    $save=Quiz_survey::create([
                        'question_id'=> $request->input('ques'.$value->id),
                        'answer'=>  $request->input('option'.$value->id),
                        'studentNo'=>$std,
            
                    ]);
                    
                }
                if($save){
                   
                    return redirect()->back()->with('status', 'THANK YOU FOR FILLING THE SURVEY');
                }

        }  
        else{
           return redirect()->back()->with('status','YOU HAVE ALREADY SUBMITTED A SURVEY');
        }
        
    }
  }


}*/