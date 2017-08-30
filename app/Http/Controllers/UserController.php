<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    
    function index(){
        return view('login');
    }
    

    function login(Request $request){
          //validate inputs
        $this->validate($request, [
            'email' => 'email|required',  
            'password' => 'required'
        ]);
        
        
        //autenticate if email and password are right with the database
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            //check in the database what type of user is it
            
            //return user home page
            return redirect()->route('crew_management');
          
        }
        Session::flash('message', 'Oops, thats not a match !');
        return redirect()->back();
    }
    
    function logout(){
        
        Auth::logout();
        return redirect()->route('login');
    }
}
