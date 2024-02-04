<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Management')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">Coding Test</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('home') }}">Instructions</a>
                <a class="nav-link" href="{{ route('companies.index') }}">Companies</a>
                <a class="nav-link" href="{{ route('users.index') }}">Users</a>
            </div>
          </div>
        </div>
      </nav>
    <div class="container mt-3">

        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JAVASCRIPT  FILES ========================================= --> 
    <script  src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script><!-- JQUERY.MIN JS --> 
    <script  src="{{asset('assets/js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
</body>
</html>
