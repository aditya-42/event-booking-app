@extends('layouts.app')
@section('main')

<div class="container mt-5">
  <h3 class="text-center">View Events</h3>
  <table class="table table-bordered table-striped mt-4">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Event Name</th>
        <th scope="col">Date</th>
        <th scope="col">Venue</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Music Concert</td>
        <td>2024-11-25</td>
        <td>Grand Arena</td>
        <td>
          <button class="btn btn-warning btn-sm" onclick="location.href='/edit-event/1'">Edit</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Art Exhibition</td>
        <td>2024-12-01</td>
        <td>Art Gallery</td>
        <td>
          <button class="btn btn-warning btn-sm" onclick="location.href='/edit-event/2'">Edit</button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Technology Seminar</td>
        <td>2024-12-10</td>
        <td>Tech Park</td>
        <td>
          <button class="btn btn-warning btn-sm" onclick="location.href='/edit-event/3'">Edit</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>



@endsection
