@extends('layouts.app')

@section('main')
  

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        @foreach($trendingEvents as $event)
        <div class="carousel-item @if($loop->first) active @endif">
          <img src="{{ asset('storage/' . $event->image) }}" class="d-block w-100 h-20" alt="{{ $event->name }}">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $event->name }}</h5>
            <p>{{ $event->description }}</p>
            <a href="{{ route('event.detail', $event->id) }}" class="btn btn-primary">View Details</a>
          </div>
        </div>
        @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>  

    <div class="container mt-5">
    <form method="GET" action="{{ route('home') }}">
      <div class="search-bar">
        <input type="text" name="query" value="{{ request('query') }}" placeholder="Search events..." class="form-control">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>

    <div class="section-title">
      @if(request('query'))
        Searched Events
      @else
        All Events
      @endif
    </div>
    <div class="row mt-3">
      @foreach($events as $event)
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $event->name }}</h5>
              <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
              <a href="{{ route('event.detail', $event->id) }}" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="section-title">Trending</div>
    <div class="row mt-3">
      @foreach($trendingEvents as $event)
        <div class="col-md-4">
          <div class="card">
            <img src="{{ asset('storage/' . $event->image) }}" class="card-img-top" alt="{{ $event->name }}">
            <div class="card-body">
              <h5 class="card-title">{{ $event->name }}</h5>
              <p class="card-text">{{ Str::limit($event->description, 100) }}</p>
              <a href="{{ route('event.detail', $event->id) }}" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>


    

    @endsection
