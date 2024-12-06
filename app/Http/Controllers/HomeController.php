<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;   

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (auth()->check()) {
            $query = $request->input('query');

            $events = Event::when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('name', 'like', '%' . $query . '%')
                                     ->orWhere('description', 'like', '%' . $query . '%');
            })->get();
            $trendingEvents = Event::inRandomOrder()->limit(3)->get();
            return view('home', compact('events', 'trendingEvents'));
        } else {
            return redirect()->route('account.login');
        }
    }
    

    function details(){
        return view('event-detail');
    }
}
