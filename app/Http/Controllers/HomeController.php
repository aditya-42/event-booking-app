<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('home');
    }

    function details(){
        return view('event-detail');
    }
}
