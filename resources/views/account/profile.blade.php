@extends('layouts.app')
@section('main')
<div class="profile-card text-center">
    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-image">
    <h2 class="profile-name">{{ Auth::user()->name }}</h2>
    <p class="profile-email">{{ Auth::user()->email }}</p>
    <div class="profile-actions">
      <button onclick="location.href='{{ route('account.edit-profile') }}'" class="btn btn-primary">Edit Profile</button>
      
      @if(Auth::user()->role === 'user')
        <button class="btn btn-secondary" onclick="location.href='{{ route('bookings.my-bookings') }}'">View Bookings</button>
      @endif

      @if(Auth::user()->role === 'admin')
        <button class="btn btn-secondary" onclick="location.href='{{ route('events.create') }}'">Add Event</button>
        <button class="btn btn-secondary" onclick="location.href='{{ route('events.view-event') }}'">View Events</button>
      @endif
      
      <button class="btn btn-secondary" onclick="location.href='{{ route('account.logout') }}'">Logout</button>
    </div>
</div>
@endsection
