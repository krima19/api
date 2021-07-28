<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Redirect;
use DB;
use Session;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }
    public function dashboard(Request $req)
    {
    	// return $user=Auth::user();
    	// return $req->input();

    	$email=$req->email;
    	$password=$req->password;
    	
    	$user=User::where('email','=',$email)->where('is_admin','=',1)->first();
    	if((!$user) || (!Hash::check($password,$user->password)))
    	{
    		 Session::put('messege','Email or Password Invalid');
             return Redirect::to('/admin'); 
    	}
        else
        {
            Session::put('admin_name',$user->name);
            Session::put('admin_id',$user->id);
            return Redirect::to('/user_detail');
        }
    	


       
               
        //    
        //        }else{                
        //            // Session::put('messege','Email or Password Invalid');
        //            return Redirect::to('/admin'); 
        //        }   
    
    }
}
