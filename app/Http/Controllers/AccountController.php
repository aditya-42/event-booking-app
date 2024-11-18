<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Show register page
    public function register(){
        return view('account.register');
    }

     // Show login page
     public function login(){
        return view('account.login');
    }

    // Show profile page

    public function profile(){
        return view('account.profile');
    }

    public function edit_profile(){
        return view('account.edit-profile');
    }
}
