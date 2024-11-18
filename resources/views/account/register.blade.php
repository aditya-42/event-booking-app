@extends('layouts.app')
@section('main')
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8 col-sm-10">
        
        <div class="form-container">
          <h4 class="text-center mb-4">Register</h4>
          <form>
          <div class="mb-3">
              <label for="userType" class="form-label">Register As</label>
              <select class="form-select" id="userType" required>
                <option value="" disabled selected>Select role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
          </form>
          <div class="divider"></div>
          <p class="text-center">
            Already have an account? <a href="{{ route('account.login') }}">Login here</a>.
          </p>
        </div>
      </div>
    </div>
  </div>
  @endsection

