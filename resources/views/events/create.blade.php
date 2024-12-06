@extends('layouts.app')
@section('main')

<div class="container mt-5 d-flex justify-content-center">
  <div class="col-md-8 col-lg-6 col-xl-5 form-container">
    <h3 class="text-center">Add Event</h3>

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif 
    
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif 

    <form method="POST" action="{{ route('events.store') }}" enctype="multipart/form-data">
      @csrf 
      <div class="mb-3">
        <label for="eventName" class="form-label">Event Name</label>
        <input type="text" class="form-control @error('event_name') is-invalid @enderror" id="eventName" name="event_name" value="{{ old('event_name') }}" placeholder="Enter event name" required>
        @error('event_name') 
          <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="eventDescription" class="form-label">Description</label>
        <textarea class="form-control @error('event_description') is-invalid @enderror" id="eventDescription" name="event_description" rows="3" placeholder="Enter event description" required>{{ old('event_description') }}</textarea>
        @error('event_description') 
          <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="eventDate" class="form-label">Date</label>
        <input type="date" class="form-control @error('event_date') is-invalid @enderror" id="eventDate" name="event_date" value="{{ old('event_date') }}" required>
        @error('event_date') 
          <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="eventVenue" class="form-label">Venue</label>
        <input type="text" class="form-control @error('event_venue') is-invalid @enderror" id="eventVenue" name="event_venue" value="{{ old('event_venue') }}" placeholder="Enter event venue" required>
        @error('event_venue') 
          <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
      </div>
      <div class="mb-3">
        <label for="eventImage" class="form-label">Upload Event Image</label>
        <input type="file" class="form-control @error('event_image') is-invalid @enderror" id="eventImage" name="event_image" accept="image/*" required>
        @error('event_image') 
          <div class="invalid-feedback">{{ $message }}</div> 
        @enderror
      </div>
      <button type="submit" class="btn btn-primary w-100">Add Event</button>
    </form>
  </div>
</div>

@endsection
