<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
Use App\User;
Use App\Profile;
Use App\answers;
Use App\counts;
Use App\questions;
use App\students;
use App\points;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( Request $request)
    {
       //$student=students::findOrfail($user);
      
       return view('profile');
      
    }
    public function loggingOut(Request $request){
        $request->session()->forget('user');
        return redirect('/');
    }
/*
    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));
    }

    public function update(User $user)
    {
        
        return redirect("/profile/{$user->id}");
    }
        */
    public function show(Request $request)
    {
        if ($request->session()->exists('user')) {
            return view("game");
        }
        else
          return redirect("/");
        
    }

    public function display($user, Request $request)
    {
        if ($request->session()->exists('user')) {
            $student=students::findOrfail($user);
      
            return view('profile_question',compact ('student'));
        }
        else
          return redirect("/");
     
    }
    public function practice(Request $request){
        if ($request->session()->exists('user')) {
            return view("practice");
        }
        else
          return redirect("/");
    }
    public function postScore($point,Request $request){
       
        $name=$request->get('name');
        $this->validate($request,[
            'name'=>'required','string',
        
        ]);
      
            $save=points::create([
                'name'=>$name,
                'score'=>(integer)$point,
              
            ]);
           if($save)
             return redirect()->route('score.board');
        
       
    }

    public function score(Request $request){
        if ($request->session()->exists('user')) {
            return view("score");
        }
        else
          return redirect("/");
    }
    public function board(Request $request){
        if ($request->session()->exists('user')) {
            $result = DB::table('points')
            ->orderBy('name', 'asc')
            ->get();
           return view('scoreboard',compact('result'));
        }
        else
          return redirect("/");
      
    }

    public function count($id, Request $request){
        if ($request->session()->exists('user')) {
            $student=students::findOrfail($id);
            $count_value=counts::where('user_id',$id)->first();
            $value=$count_value->values;
            return view('count', compact('value','student'));
        }
        else
          return redirect("/");
       
    }
    
   
    public function quiz($id, Request $request){
        if ($request->session()->exists('user')) 
        {
            $user=students::findOrfail($id);
        
            $output=DB::table('questions')->inRandomOrder()->limit(1)->get();

            $user_id=$user->id;
            $user_result = counts::where('user_id', $user_id)->exists();
        
            $answer=answers::all();
            
            if($user_result)
            {
                $count_value=counts::where('user_id',$user_id)->first();
            
                $value_right=$count_value->right;

                $value_wrong=$count_value->wrong;
            
                $value_attempt=$count_value->attempts;
                
                //if to increment attempt on page refresh due to counter timeout
                if($request->submit != "Submit Answer"){
                    $attempt = counts::where('user_id',$user_id)->first();
                    $attempt->attempts=$value_attempt+1;
                    $attempt->save();
                    if($value_attempt>12)
                    {
                        
                        $attempt_count = counts::where('user_id',$user_id)->first();
                        $attempt_count->right=0;
                        $attempt_count->wrong=0;
                        $attempt_count->attempts=0;
                        $attempt_count->values=$value_right;
                        $attempt_count->save();
                        
                        return redirect("/quizCount/{$user->id}")
                        ->with('status', 'Thanks number of attempts completed check back for your score please help fill survey');
                        
                    }
                }
                else
                { 
                    //value of selected input field for answers
                    $res=$request->input('select1');
                    $res2=$request->input('select2');
                    $res3=$request->input('select3');
                    $res4=$request->input('select4');
                    
                
                    //value of question from hidden field
                    $result1=$request->input('question1');
                    $result2=$request->input('question2');
                    $result3=$request->input('question3');
                    $result4=$request->input('question4');
                    $result5=$request->input('question5');
                    $result6=$request->input('question6');
                    $result7=$request->input('question7');
                    $result8=$request->input('question8');
                    $result9=$request->input('question9');
                    $result10=$request->input('question10');
                    $result11=$request->input('question11');
                    $result12=$request->input('question12');
                    $result13=$request->input('question13');
                    $result14=$request->input('question14');
                    $result15=$request->input('question15');
                    $result16=$request->input('question16');
                    $result17=$request->input('question17');
                    $result18=$request->input('question18');
                    $result19=$request->input('question19');
                    $result20=$request->input('question20');
                    $result21=$request->input('question21');
                    $result22=$request->input('question22');
                    $result23=$request->input('question23');
                    $result24=$request->input('question24');
                    // attempts count
                    $attempt = counts::where('user_id',$user_id)->first();
                    $attempt->attempts=$value_attempt;
                    $attempt->save();
                    
                    if($value_attempt>12)
                    {
                        $stored_randomValue=[];
                        $attempt_count = counts::where('user_id',$user_id)->first();
                        $attempt_count->right=0;
                        $attempt_count->wrong=0;
                        $attempt_count->attempts=0;
                        $attempt_count->values=$value_right;
                        $attempt_count->save();
                        // session()->forget('keys');
                        return redirect("/quizCount/{$user->id}")
                        ->with('status', 'Thanks number of attempts completed  PLEASE FILL SURVEY');
                        
                    }
                    
                    //creating assocoative array from value gotten from form 
                    $question_result=array($result1=>$res, $result2=>$res2, $result3=>$res3,$result4=>$res4,$result5=>$res,
                    $result6=>$res2,$result7=>$res3,$result8=>$res4,$result9=>$res,$result10=>$res2,$result11=>$res3,$result12=>$res4,$result13=>$res,
                    $result14=>$res2,$result15=>$res3,$result16=>$res4,$result17=>$res,$result18=>$res2,$result19=>$res3,$result20=>$res4,
                    $result21=>$res,$result22=>$res2,$result23=>$res3,$result24=>$res4);                  
                
                    foreach($question_result as $result=>$value)
                    { 
                        foreach($answer as $results)
                        {
                            
                            if($result==$results->question_id)
                            {
                                if($value==$results->answer)
                                {
                                    $right = counts::where('user_id',$user_id)->first();
                                    $right->right=$value_right+1;
                                    $right->save();
                                
                                    return redirect()->back()->with('status', "Congrats option" .$value." is the right answer" );
                                        
                                }
                                /*  elseif($value==""){
                                    return redirect("/question/{$user->id}")->with('status', 'You did not select any option please do that.');
                                }*/
                                else
                                {
                                    $wrong = counts::where('user_id',$user_id)->first();
                                    $wrong->wrong=$value_wrong+1;
                                    $wrong->save();
                                    return redirect()->back()->with('status','Answer is option '.$results->answer." you selected option  " .$value. "
                                    sum up numbers with just 1 not 0. tip: for 8 bit assuming all numbers are 1 (128+64+32+16+8+4+2+1=255) hope this was helpful " );

                            
                                }
                                
                            }
                    
                        }
                        
                    }
                }  
            } 
            
        
            return view('question',compact('user','output','count_value')); 
        }
    else
        return redirect("/");
    }
}
 
   



