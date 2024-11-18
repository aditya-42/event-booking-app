@extends('layouts.app')
@section('main')
<div class="container mt-5 d-flex justify-content-center">
  <div class="col-md-8 col-lg-6 col-xl-5 form-container">
    <h3 class="text-center">Edit Event</h3>
    <form method="POST" action="/update-event" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="eventName" class="form-label">Event Name</label>
        <input type="text" class="form-control" id="eventName" name="event_name" placeholder="Enter event name">
      </div>
      <div class="mb-3">
        <label for="eventDescription" class="form-label">Description</label>
        <textarea class="form-control" id="eventDescription" name="event_description" rows="3" placeholder="Enter event description">   </textarea>
      </div>
      <div class="mb-3">
        <label for="eventDate" class="form-label">Date</label>
        <input type="date" class="form-control" id="eventDate" name="event_date" value="">
      </div>
      <div class="mb-3">
        <label for="eventVenue" class="form-label">Venue</label>
        <input type="text" class="form-control" id="eventVenue" name="event_venue" placeholder="Enter event venue" value="" >
      </div>
      <div class="mb-3">
        <label for="eventImage" class="form-label">Upload New Image</label>
        <input type="file" class="form-control" id="eventImage" name="event_image" accept="image/*">
      </div>
      <div class="mb-3 text-center">
        <label>Current Image:</label>
        <br>
        <img src="https://placehold.co/200x150" alt="Event Image" class="img-fluid rounded" style="max-height: 200px;">
      </div>
      <button type="submit" class="btn btn-primary w-100">Save Changes</button>
    </form>
  </div>
</div>
@endsection