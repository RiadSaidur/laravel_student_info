<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('assets') }}/css/bootstrap.css">
  <script defer src="{{ asset('assets') }}/js/bootstrap.js"></script>
  <title>Student | @yield('title')</title>
</head>
<body>
  
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">Student</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('list') }}">List</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <main class="container-fluid">
    <div class="row">
      <div class="col-12">
        @yield('main')
      </div>
    </div>
  </main>

</body>
</html>