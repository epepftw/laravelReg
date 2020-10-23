<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class ProfileController extends Controller
{ 
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){       
        $userInfo = User::where('email', session()->get('email'))->get();
        return view('Userprofile')->with('user',$userInfo);
    }
    public function edit($id){
        $user = User::find($id);
        return view('ChangeProfile')->with('user',$user);
    }
    public function updateProfile(Request $request,$id){
        $user = User::find($id);

        $birthday =  $request->input('month');
        $user->firstname = $request->input('fname');
        $user->middlename = $request->input('mname');
        $user->lastname = $request->input('lname');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->address = $request->input('address');
        $user->save();
        echo "Updated Successfully! <a href='/profile'>return to profile</a>";
    }
    public function editpass($id){
        $user = User::find($id);
        return view('ChangePassword')->with('user',$user);
    }
    public function updatePassword(Request $request,$id){
        $user = User::find($id);

        if(Hash::check($request->input('old'), $user->password)){
            if($request->input('new') == $request->input('confirm')){
                $user->password = Hash::make($request->input('new'));
                echo "Password Updated! <a href='/profile'>return</a>";
                $user->save();
            }
            else    
                echo "New and Confirm Password does not match!. Please try again. <a href='/profile/editpass/$id'>return</a>";
        }
        else
            echo " Password does not match!. Please try again. <a href='/profile/editpass/$id'>return</a>";
    }
}
