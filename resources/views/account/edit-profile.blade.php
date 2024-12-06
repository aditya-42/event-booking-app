@extends('layouts.app')
@section('main')
<div class="container mt-5 d-flex justify-content-center">
  <div class="col-md-6 col-lg-5 col-xl-4 form-container">
    <h3 class="text-center">Edit Profile</h3>

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif
    @if (session('error'))
      <div class="alert alert-danger">
        {{ session('error') }}
      </div>
    @endif

    <form action="{{ route('account.updateProfile') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control @error('username') is-invalid @enderror" 
               id="username" name="username" value="{{ old('username', $user->name) }}">
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" 
               id="email" name="email" value="{{ old('email', $user->email) }}">
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary w-100">Save Changes</button>
    </form>
  </div>
</div>
@endsection
