@extends('layouts.app')

@section('main')
<div class="container mt-5">
    <h3 class="text-center">My Bookings</h3>
    
    @if($bookings->isEmpty())
        <div class="alert alert-warning text-center" role="alert">
            No events found.
        </div>
    @else
        <div class="row mt-4">
            @foreach($bookings as $booking)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $booking->event->image) }}" class="card-img-top" alt="{{ $booking->event->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $booking->event->name }}</h5>
                            <p class="card-text"><strong>Date:</strong> {{ $booking->event->date }}</p>
                            <p class="card-text"><strong>Venue:</strong> {{ $booking->event->venue }}</p>
                            <form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete Booking</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
