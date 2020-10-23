<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Validator;
class RegisterController extends Controller
{
    public function Register(Request $request){       
        $birthday =  $request->input('month');
        $validate = Validator::make($request->all(), [
            "email" => "unique:users,email",
            "confirmpassword" => 'required|same:password',
            "contact" => "required|min:11"
        ]);
        if($validate->fails()){
            return redirect("/register")->withErrors($validate)->withInput();
        }
        User::create(["firstname" => $request->input('firstname'),
                      "middlename" => $request->input('middlename'),
                      "lastname" => $request->input('lastname'),
                      "email" => $request->input('email'),
                      "address" => $request->input('address'),
                      "password" => Hash::make($request->input('password')),
                      "contact" => $request->input('contact'),
                      "birthday" => $birthday,
                      ]);
        echo "<h3>Registration Successful! click <a href='/login'>here</a> to login.<h3> ";
    }
}
