<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{   
    function view_bookings(){
        return view('event.view-bookings');
    }

    function add_event(){
        return view('event.add-event');
    }

    function edit_event(){
        return view('event.edit-event');
    }

    function view_event(){
        return view('event.view-event');
    }
}
