<!DOCTYPE html>
<html>
<head>
  <title>@yield('title', 'Laravel App')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  @include('layouts.navbar')
  <main class="py-4">
    @yield('content')
  </main>
    <footer class="text-center py-4">
        <p>&copy; {{ date('Y') }} Articles App</p>
    </footer>
</body>
</html>