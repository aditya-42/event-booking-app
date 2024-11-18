@extends('layouts.app')
@section('main')
<div class="profile-card text-center">
    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-image">
    <h2 class="profile-name">John Doe</h2>
    <p class="profile-email">johndoe@example.com</p>
    <div class="profile-actions">
      <button onclick="location.href='{{ route('account.edit-profile') }}'" class="btn btn-primary">Edit Profile</button>
      <button class="btn btn-secondary" onclick="location.href='{{ route('event.view-bookings') }}'">View Bookings</button>
      <button class="btn btn-secondary">Add Event</button>
      <button class="btn btn-secondary">My Events</button>
    </div>
  </div>
@endsection