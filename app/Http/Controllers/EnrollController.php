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
use App\student_counts;
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

    $this->validate($request,[
        'stdno'=>'required','integer','min:8' 
    ]); 
   
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
   public function postland()
   {
       return view("post_land");
   }
   public function postlanding()
   {
       return view("post_landing");
   }
   public function postSurvey()
   {
       return view("postSurvey");
   }
   public function post(Request $request)
   {
    //if (Request::isMethod('post')){
        $stdId=$request->input('studentNo');
        $exist_result = students::where('studentNo',$stdId)->exists();
        if(!$exist_result)
        {
            $this->validate($request,[
                'studentNo'=>'required|unique:students|integer|min:8' 
            ]);   
            $save=students::create([
            'studentNo'=>$stdId
            ]);
            if($save)
            {
                $student=students::where('studentNo',$stdId)->first();
                $count= new counts();
                $count->right=0;
                $count->wrong=0;
                $count->attempts=0;
                $count->values=0;
                $count->user_id=$student->id;
                $count->save();

                $stdId=new student_counts();
                $stdId->student_id=$student->id;
                $stdId->count=1;
                $stdId->save();
                return view('profile_question',compact('student'));
            }
        }
        else{
             $student=students::where('studentNo',$stdId)->first();
            $exists=student_counts::where('student_id',$student->id)->exists();
            if($exists){
                $stdId=student_counts::where('student_id',$student->id)->first();
                student_counts::where('student_id',$student->id)->update([
                    'count'=>$stdId->count+1,
                ]);
                return view('profile_question',compact('student'));
            }else
            return redirect()->back()->with('message','The student number is not for this research group');
       
        }
    //}
    //else{ 
       //return redirect()->back();
   // }
   }
   public function entrance(Request $request)
   {
    $stdId=request('studentNo');
    /*$this->validate($request,[
        'studentNo'=>'required|unique:students|integer' 
    ]);*/

        $stdId=request('studentNo');

        $exist_result = students::where('studentNo',$stdId)->exists();
        if(!$exist_result)
        {
            $save=students::create([
            'studentNo'=>$stdId
            ]);
            if($save)
            {
                $student=students::where('studentNo',$stdId)->first();
                $stdId=new student_counts();
                $stdId->student_id=$student->id;
                $stdId->count=1;
                $stdId->save();
                return redirect()->route('profile.game');
            }
        }
        else{
            $student=students::where('studentNo',$stdId)->first();
            $exists=student_counts::where('student_id',$student->id)->exists();
            if($exists){
                $stdId=student_counts::where('student_id',$student->id)->first();
                student_counts::where('student_id',$student->id)->update([
                    'count'=>$stdId->count+1,
                ]);
              
                return redirect()->route('profile.game');
            }else
            return redirect()->back()->with('message','The student number is not for this research group');
        }

   }
   public function entrance2(Request $request)
   {
        $stdId=request('studentNo');
        $exist_result = students::where('studentNo',$stdId)->exists();
        if(!$exist_result)
        {
            dd($stdId,'yes');
            $save=students::create([
            'studentNo'=>$stdId
            ]);
            if($save)
            {
                $student=students::where('studentNo',$stdId)->first();
                $stdId=new student_counts();
                $stdId->student_id=$student->id;
                $stdId->count=1;
                $stdId->save();
                return redirect()->route('quiz',$student->id);
            }
        }
        else{
            $student=students::where('studentNo',$stdId)->first();
            $exists=student_counts::where('student_id',$student->id)->exists();
            if($exists){
                $stdId=student_counts::where('student_id',$student->id)->first();
                student_counts::where('student_id',$student->id)->update([
                    'count'=>$stdId->count+1,
                ]);
              
                return redirect()->route('quiz',$student->id);
             
            }else
            return redirect()->back()->with('message','The student number is not for this research group');
        }

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