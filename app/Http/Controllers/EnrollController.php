<?php

namespace App\Http\Controllers;
Use App\User;
Use App\Courses;
use Auth;
use Session;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->submit == "course")
        {
        
           return view('home');
         // return redirect("/login")->with('warning', 'you need to login to enrol.');
          //echo "<script>alert(' you must login first!!')</script>";   

        }// if(($request->submit == "enrol")&&(!Auth::user()))
       /* else{
        
            return redirect('/home/' . auth()->user()->id);
            
        }*/
    }
}

