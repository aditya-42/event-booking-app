<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Eventz</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>

<div class="navbar">
    <div class="title" style="cursor:pointer" onclick="location.href='{{ route('account.register') }}'">Eventz</div>
    <div class="nav-buttons">
      <button onclick="location.href='{{ route('home') }}'">Explore</button>
      <button onclick="location.href='{{ route('account.login') }}'">Login</button>
      <button onclick="location.href='{{ route('account.register') }}'">Register</button>
    </div>
  </div>
 

@yield('main')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
