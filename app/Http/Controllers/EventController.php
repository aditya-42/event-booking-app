<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{   
    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'required|string|max:1000',
            'event_date' => 'required|date|after:today',
            'event_venue' => 'required|string|max:255',
            'event_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        $imagePath = $request->file('event_image')->store('event_images', 'public');
    
        Event::create([
            'name' => $validated['event_name'],
            'description' => $validated['event_description'],
            'date' => $validated['event_date'],
            'venue' => $validated['event_venue'],
            'image' => $imagePath,
        ]);
    
        return redirect()->route('events.create')->with('success', 'Event created successfully!');    
    }

    public function edit_event($id)
    {   
    $event = Event::findOrFail($id);
    return view('events.edit-event', compact('event'));
    }


    public function update(Request $request, $id)
    {
    $request->validate([
        'event_name' => 'required|string|max:255',
        'event_description' => 'required|string',
        'event_date' => 'required|date|after:today',
        'event_venue' => 'required|string|max:255',
        'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $event = Event::findOrFail($id);

    $event->name = $request->event_name;
    $event->description = $request->event_description;
    $event->date = $request->event_date;
    $event->venue = $request->event_venue;

    if ($request->hasFile('event_image')) {
        if ($event->image && file_exists(storage_path('app/public/' . $event->image))) {
            unlink(storage_path('app/public/' . $event->image));
        }
        $event->image = $request->file('event_image')->store('events', 'public');
    }

    $event->save();

    return redirect()->route('events.view-event')->with('success', 'Event updated successfully.');
    }


    function view_event(){
        $events = Event::all();
        return view('events.view-event', compact('events'));
    }

    public function edit($id)
    {
    $event = Event::findOrFail($id);
    return view('events.edit', compact('event'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        $relatedEvents = Event::inRandomOrder()->limit(3)->get();

        return view('event-detail', compact('event', 'relatedEvents'));
    }


    public function destroy($id)
    {
    $event = Event::findOrFail($id);
    if ($event->image && file_exists(storage_path('app/public/' . $event->image))) {
        unlink(storage_path('app/public/' . $event->image));
    }
    $event->delete();
    return redirect()->route('events.view-event')->with('success', 'Event deleted successfully.');
    }   
}
