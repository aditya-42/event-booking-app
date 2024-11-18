@extends('layouts.app')
@section('main')
  

  <div class="container mt-5">
    <!-- Carousel Section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://placehold.co/300x400" class="d-block w-100 h-20" alt="Event 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Featured Event 1</h5>
            <p>Discover the excitement!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://placehold.co/300x400" class="d-block w-100 h-20" alt="Event 2">
          <div class="carousel-caption d-none d-md-block">
            <h5>Featured Event 2</h5>
            <p>Don't miss out!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://placehold.co/300x400" class="d-block w-100 h-20" alt="Event 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Featured Event 3</h5>
            <p>Join the fun today!</p>
          </div>
        </div>
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

    <div class="container mt-4">
  <div class="search-bar">
    <input type="text" placeholder="Search events...">
    <button>Search</button>
  </div>
</div>

    <!-- Trending Section -->
    <div class="section-title">Trending</div>
    <div class="row mt-3">
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Trending Event 1">
          <div class="card-body">
            <h5 class="card-title">Trending Event 1</h5>
            <p class="card-text">Description of the trending event.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Trending Event 2">
          <div class="card-body">
            <h5 class="card-title">Trending Event 2</h5>
            <p class="card-text">Description of the trending event.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Trending Event 3">
          <div class="card-body">
            <h5 class="card-title">Trending Event 3</h5>
            <p class="card-text">Description of the trending event.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- All Events Section -->
    <div class="section-title">All Events</div>
    <div class="row mt-3">
      <div class="col-md-4">
        <div class="card">
            <a href="{{ route('event.detail') }} ">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Event 1">
</a>
          <div class="card-body">
            <h5 class="card-title">Event 1</h5>
            <p class="card-text">Details about Event 1.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Event 2">
          <div class="card-body">
            <h5 class="card-title">Event 2</h5>
            <p class="card-text">Details about Event 2.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Event 3">
          <div class="card-body">
            <h5 class="card-title">Event 3</h5>
            <p class="card-text">Details about Event 3.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
