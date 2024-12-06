@extends('layouts.app')
@section('main')
<div class="container mt-5 d-flex justify-content-center">
  <div class="col-md-8 col-lg-6 col-xl-5 form-container">
    <h3 class="text-center">Edit Event</h3>
    <form method="POST" action="{{ route('events.update', $event->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="eventName" class="form-label">Event Name</label>
        <input type="text" class="form-control @error('event_name') is-invalid @enderror" id="eventName" name="event_name" value="{{ old('event_name', $event->name) }}" placeholder="Enter event name">
        @error('event_name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="eventDescription" class="form-label">Description</label>
        <textarea class="form-control @error('event_description') is-invalid @enderror" id="eventDescription" name="event_description" rows="3" placeholder="Enter event description">{{ old('event_description', $event->description) }}</textarea>
        @error('event_description')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="eventDate" class="form-label">Date</label>
        <input type="date" class="form-control @error('event_date') is-invalid @enderror" id="eventDate" name="event_date" value="{{ old('event_date', $event->date) }}">
        @error('event_date')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="eventVenue" class="form-label">Venue</label>
        <input type="text" class="form-control @error('event_venue') is-invalid @enderror" id="eventVenue" name="event_venue" value="{{ old('event_venue', $event->venue) }}" placeholder="Enter event venue">
        @error('event_venue')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="eventImage" class="form-label">Upload New Image</label>
        <input type="file" class="form-control @error('event_image') is-invalid @enderror" id="eventImage" name="event_image" accept="image/*">
        @error('event_image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3 text-center">
        <label>Current Image:</label>
        <br>
        <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image" class="img-fluid rounded" style="max-height: 200px;">
      </div>
      <button type="submit" class="btn btn-primary w-100">Save Changes</button>
    </form>
  </div>
</div>
@endsection
