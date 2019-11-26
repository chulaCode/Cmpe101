<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;
Use  App\User;
Use App\Profile;
Use  App\answers;
Use  App\Counts;
Use  App\questions;
use App\lectures;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( $user,Request $request)
    {
       $user=User::findOrfail($user);
      // $lecture1=lectureones::all();
      $lecture1=DB::table('lectures')->get();
      
      //retrieving question
      
       $userA = Auth::user();
       if($user==$userA) 
       
         return view('profile',compact
         ('user','lecture1'));
      else
      return  redirect("/");
    }
    public function edit(User $user)
    {
        //dd($user);
        //this is same like the index function shorter way of doing it
        return view('profile.edit',compact('user'));
    }
    public function update(User $user)
    {
        $data=request()->validate([
         'username'=>'required',
         'image'=>'',
        ]);
        if (request('image')) {
            $imagePath = request('image');
            $img = Image::make($imagePath)->fit(1000,1000);
            $name=uniqid().$imagePath->getClientOriginalName();
            $imagePath->move('profile',$name);
           // $imagePath->store('profile','public');
           // $name=$imagePath->getClientOriginalName();
            //$file=$imagePath->getClientOriginalExtension();
           // $name=$file->getClientOriginalName();
           // $img->save();
           $user->image=$name;
            $user->save();
          
            $imageArray = ['image' => $name];
        }
        auth()->user()->update(array_merge(
            $data,
            $imageArray ?? []
          // ['image'=>$name]
        ));
       /*
       $user->image = whatevertheimagepathis; $user->save()
        if($file=request('image'))
        {
            $name=$file->getClientOriginalName();
            if($file->move('profile',$name))
            {
        
                $img=new Profile();
                $img->image=$name;
                $img->user_id =auth()->user()->id;
                $img->username=$data['username'];
                $img->save();
            }    
        }
        auth()->user()->update(
            array_merge(
                $data,
                ['image'=>$img]
            )    
        );
        */
        return redirect("/profile/{$user->id}");
    }
        
    public function show( $user,Request $request)
    {
         $user=User::findOrfail($user);
            
           
            return view('game',compact('user')); 
        
        }
    }


