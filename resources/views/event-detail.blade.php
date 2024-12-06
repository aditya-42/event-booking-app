@extends('layouts.app')

@section('main')
  <div class="container mt-5">
    <a href="{{ route('home') }}" class="back-button">&larr; Back to All Events</a>

    <div class="event-container">
      <div class="event-image">
        <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->name }}">
      </div>
      <div class="event-details">
        <h2>{{ $event->name }}</h2>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        <p><strong>Date:</strong> {{ $event->date }}</p>
        <p><strong>Venue:</strong> {{ $event->venue }}</p>
        @if(auth()->check())
          @php
            $isBooked = \App\Models\Booking::where('user_id', auth()->id())->where('event_id', $event->id)->exists();
          @endphp
          @if($isBooked)
            <button class="btn btn-primary" disabled>Already Booked</button>
          @else
            <form action="{{ route('booking.store', $event->id) }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
          @endif
        @else
          <a href="{{ route('login') }}" class="book-button">Login to Book</a>
        @endif
      </div>
    </div>

    <div class="related-events">
      <h3 class="section-details">Related Events</h3>
      <div class="row">
        @foreach($relatedEvents as $relatedEvent)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img src="{{ asset('storage/' . $relatedEvent->image) }}" class="card-img-top" alt="{{ $relatedEvent->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $relatedEvent->name }}</h5>
              <p class="card-text">Date: {{ $relatedEvent->date }}</p>
              <p class="card-text">Venue: {{ $relatedEvent->venue }}</p>
              <a href="{{ route('event.detail', $relatedEvent->id) }}" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
