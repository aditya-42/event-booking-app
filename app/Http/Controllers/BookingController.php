<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function bookEvent($eventId)
    {
        $event = Event::findOrFail($eventId);

        $existingBooking = Booking::where('user_id', auth()->id())
                                  ->where('event_id', $event->id)
                                  ->first();

        if ($existingBooking) {
            return redirect()->route('events.view-event')->with('error', 'You have already booked this event.');
        }

        Booking::create([
            'user_id' => auth()->id(),
            'event_id' => $event->id,
        ]);

        return redirect()->route('events.view-event')->with('success', 'Event booked successfully!');
    }


    public function myBookings()
    {
        $bookings = Booking::where('user_id', auth()->id())->get();
        return view('bookings.my-bookings', compact('bookings'));
    }


    public function store(Event $event)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to book an event.');
        }

        $existingBooking = Booking::where('user_id', Auth::id())->where('event_id', $event->id)->first();

        if ($existingBooking) {
            return redirect()->route('event.detail', $event->id)->with('error', 'You have already booked this event.');
        }

        Booking::create([
            'user_id' => Auth::id(),
            'event_id' => $event->id,
        ]);

        return redirect()->route('event.detail', $event->id)->with('success', 'Your booking was successful!');
    }


    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('bookings.my-bookings')->with('success', 'Booking cancelled successfully.');
    }

}

