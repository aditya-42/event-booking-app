@extends('layouts.app')
@section("main")
<div class="container mt-5 d-flex justify-content-center">
  <div class="col-md-8 col-lg-8 col-xl-8 form-container">
    <h3 class="text-center">My Bookings</h3>
    <table class="table table-bordered table-hover mt-4">
      <thead class="table-primary">
        <tr>
          <th>Event</th>
          <th>Date</th>
          <th>Venue</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Music Concert</td>
          <td>25th Nov 2024</td>
          <td>Grand Arena</td>
        </tr>
        <tr>
          <td>Art Exhibition</td>
          <td>1st Dec 2024</td>
          <td>Art Gallery</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>


@endsection