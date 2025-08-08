<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- App brand/logo -->
    <a class="navbar-brand" href="{{ url('/') }}">Articles App</a>
    <!-- Mobile menu toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Navigation menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @auth
          <!-- Show these links only for logged-in users -->
          <li class="nav-item"><a class="nav-link" href="{{ route('articles.index') }}">Articles</a></li>
          <li class="nav-item">
            <!-- Logout form - must be POST with CSRF protection -->
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
          </li>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
              @csrf
              
              <button class="btn btn-link nav-link">Logout</button>
            </form>
          </li>
        @else
          <!-- Show these links only for guests (not logged in) -->
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @endauth
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
      </ul>
    </div>
  </div>
</nav>