<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    // Show register page
    public function register(){
        return view('account.register');
    }

    public function processRegister(Request $request){
        $validator = Validator::make($request->all(),[
            'userType' => 'required|in:user,admin',
            'username' =>'required|min:3',
            'email' =>'required|email|unique:users',
            'password' => 'required|confirmed|min:5',
            'password_confirmation' => 'required',

        ]);


        
        if ($validator->fails()){
            return redirect()->route('account.register')-> withInput()->withErrors($validator);
        }

        $user = new User();

        $user->role = $request->userType;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();


        return redirect()->route('account.login')->with('success','You have registered successfully');

    }


    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email' =>'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()){
            return redirect()->route('account.login')->withInput()->withErrors($validator);
        }

       if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('account.profile');
        }

        else{
            return redirect()->route('account.login')->with('error','Check email or password again!');
        }
    }


     // Show login page
     public function login(){
        return view('account.login');
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('account.login');
    }

    // Show profile page

    public function profile(){

        return view('account.profile');
    }

    public function edit_profile(){
        $user = User::find(Auth::user()->id);
        return view('account.edit-profile',[
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request){
        $validator = Validator::make($request->all(),[

            'username' =>'required|min:3',
            'email' =>'required|email|unique:users,email,'.Auth::user()->id.',id',

        ]);

        if ($validator->fails()){
            return redirect()->route('account.edit-profile')->withInput()->withErrors($validator);
        }

        $user = User::find(Auth::user()->id);
        $user->name = $request->username;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('account.edit-profile')->with('success','Profile updated successfully.');

    }
}
