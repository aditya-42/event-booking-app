@extends('layouts.app')
@section("main")
  <div class="container mt-5">
    <a href="{{ route('home') }}" class="back-button">&larr; Back to All Events</a>
    <div class="event-container">
      <div class="event-image">
        <img src="https://via.placeholder.com/300x300" alt="Event Image">
      </div>
      <div class="event-details">
        <h2>Event Name</h2>
        <p><strong>Description:</strong> This is a detailed description of the event. Learn about what this event has to offer and why you should attend.</p>
        <p><strong>Date:</strong> December 15, 2024</p>
        <p><strong>Venue:</strong> Grand Hall, City Center</p>
        <button class="book-button">Book Now</button>
      </div>
    </div>

    <div class="related-events">
      <h3>Related Events</h3>
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Related Event 1">
            <div class="card-body">
              <h5 class="card-title">Related Event 1</h5>
              <p class="card-text">Date: Dec 20, 2024</p>
              <p class="card-text">Venue: Downtown Arena</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Related Event 2">
            <div class="card-body">
              <h5 class="card-title">Related Event 2</h5>
              <p class="card-text">Date: Dec 22, 2024</p>
              <p class="card-text">Venue: City Park</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Related Event 3">
            <div class="card-body">
              <h5 class="card-title">Related Event 3</h5>
              <p class="card-text">Date: Dec 25, 2024</p>
              <p class="card-text">Venue: Convention Hall</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection