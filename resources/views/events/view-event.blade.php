@extends('layouts.app')
@section('main')

<div class="container mt-5">
  <h3 class="text-center">View Events</h3>
  @if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

  <div class="row mt-4">
    @foreach ($events as $event)
    <div class="col-md-4 mb-4">
      <div class="card h-100">
        <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->name }}">
        <div class="card-body">
          <h5 class="card-title">{{ $event->name }}</h5>
          <p class="card-text">{{ $event->description }}</p>
          <p><strong>Date:</strong> {{ $event->date }}</p>
          <p><strong>Venue:</strong> {{ $event->venue }}</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <button class="btn btn-warning btn-sm" onclick="location.href='{{ route('events.edit-event', $event->id) }}'">Edit</button>
          <form action="{{ route('events.destroy', $event->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

@endsection
