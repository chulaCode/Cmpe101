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
    public function index( $user,Request $request)
    {
       $student=students::findOrfail($user);
      
       return view('profile',compact ('student'));
    
    }

    public function edit(User $user)
    {
        return view('profile.edit',compact('user'));
    }

    public function update(User $user)
    {
        
        return redirect("/profile/{$user->id}");
    }
        
    public function show( $id)
    {
        //$user=students::where('id',$id)->first();
        $user=students::findOrfail($id);
         return view('game',compact('user')); 
        
    }

    public function display($user, Request $request)
    {
        $student=students::findOrfail($user);
      
        return view('profile_question',compact ('student'));
     
    }
    public function practice($id){
       $user=students::findOrfail($id);
       return view('practice',compact('user'));
    }
    public function postScore($point,Request $request){
       // dd($request->get('stdno'),$request->get('name'),$point);
        $this->validate($request,[
            'name'=>'required','string',
            'studentNo'=>'interger','unique:points'
        ]);
        $save=points::create([
            'name'=>$request->get('name'),
            'score'=>(integer)$point,
            'studentNo'=>(integer)$request->get('stdno')
        ]);
      if($save)
         return redirect()->route('score.board');
    }

    public function score(Request $request){
             
        return view('score');
    }
    public function board($id){
        
        $result = DB::table('points')
                ->orderBy('name', 'asc')
                ->get();
         return view('scoreboard',compact('result','id'));
    }
    public function quiz($id, Request $request){
       
        $user=students::findOrfail($id);
       // $value=$user->studentNo;
        //$number =substr($value,-1);
     
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
                      if($value_attempt>10)
                      {
                          
                          $attempt_count = counts::where('user_id',$user_id)->first();
                          $attempt_count->right=0;
                          $attempt_count->wrong=0;
                          $attempt_count->attempts=0;
                          $attempt_count->values=$value_right;
                          $attempt_count->save();
                         
                         return redirect("/question/{$user->id}")
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
                      // attempts count
                      $attempt = counts::where('user_id',$user_id)->first();
                      $attempt->attempts=$value_attempt;
                      $attempt->save();
                     
                      if($value_attempt>10)
                      {
                          $stored_randomValue=[];
                          $attempt_count = counts::where('user_id',$user_id)->first();
                          $attempt_count->right=0;
                          $attempt_count->wrong=0;
                          $attempt_count->attempts=0;
                          $attempt_count->values=$value_right;
                          $attempt_count->save();
                         // session()->forget('keys');
                          return redirect()->route('profile.display',$user_id)
                          ->with('status', 'Thanks number of attempts completed check back for your score and help fill survey');
                         
                      }
                      
                      //creating assocoative array from value gotten from form 
                      $question_result=array($result1=>$res, $result2=>$res2, $result3=>$res3,$result4=>$res4,$result5=>$res,
                      $result6=>$res2,$result7=>$res3,$result8=>$res4,$result9=>$res,$result10=>$res2,$result11=>$res3,$result12=>$res4,$result13=>$res);                  
                  
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
   
 }


