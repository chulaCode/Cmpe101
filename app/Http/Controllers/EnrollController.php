<?php

namespace App\Http\Controllers;
Use App\User;
Use App\Courses;
Use App\survey_questions;
Use App\surveys;
Use App\students;
use App\post_surveys;
use App\Quiz_survey;
use Auth;
use Session;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->submit == "course")
        {
           $name=$request->get('stdno');
           $number=(integer)$value =substr($name,-1);
           if(($number%2)==0)
               dd();
           else
              dd('not zero');
           
       }
   }
   public function survey(){

     $result= survey_questions::where('number',1)->get();
     return view('survey',compact('result'));
   }

   public function store(Request $request)
   {
    $result= survey_questions::where('number',1)->get();

    if($request->submit == "course")
    {
      $name=$request->get('stdno');
      $user=(integer)$name;
      $number=(integer)$value =substr($name,-1);
      $student=students::where('studentNo',$user)->first();
      $first=surveys::all()->first();
      $qID=$first->question_id;
      $exist_result = surveys::where('studentNo',$user)->exists();
      if(!$exist_result)
      {
       
            if(($number%2)==0){
                
                    foreach($result as $value)
                    { 
                        $save=surveys::create([
                            'question_id'=> $request->input('ques'.$value->id),
                            'answer'=>  $request->input('option'.$value->id),
                            'studentNo'=> $user,
                
                        ]);
                        
                    }
                    if($save){
                        $student= new students();
                        $student->studentNo=$user;
                        $student->save();
                        return redirect(route('profile.show',$student->id))->with('status', 'THANK YOU FOR FILLING THE SURVEY');
                    }

            }  
            else{

                    foreach($result as $value)
                    { 
                        $save=surveys::create([
                            'question_id'=> $request->input('ques'.$value->id),
                            'answer'=>  $request->input('option'.$value->id),
                            'studentNo'=> $user,
                
                        ]);
                        
                    }
                    if($save){
                        $student= new students();
                        $student->studentNo=$user;
                        $student->save();

                        $count= new counts();
                        $count->user_id=$user_id;
                        $count->wrong=0;
                        $count->right=0;
                        $count->values=0;
                        $count->attempts=0;
                        $count->save();
                        return redirect(route('profile.display',$student->id))->with('status', 'THANK YOU FOR FILLING THE SURVEY');
                    }

                }
        }
        else{
            if(($number%2)==0)
               return redirect(route('profile.show',$student->id));
              //return view('profile',compact('student'));
            else
               return redirect(route('profile.display',$student->id));
        }
        
    }
   
   }
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


}