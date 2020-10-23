<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
class LoginController extends Controller
{
    public function login(){      
        if(session()->has('email'))
            return redirect('profile');  
        $errorMsg = null;
        return view('login')->with("errorMsg" ,$errorMsg);
    }
    public function postLogin(Request $request){        
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->get("email");
        $pass = $request->get('password');
        Hash::make($pass); //encrypting password
        if (Auth::attempt(['email' => $email, 'password' => $pass])){            
            $request->session()->put('email',$email);
            return redirect('profile');           
        }
        else{
            $errorMsg = "Username or Password is invalid";
            return view('login')->with("errorMsg" ,$errorMsg);
        }
    }               
}
