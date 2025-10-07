<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | AbytaFlorist</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #fffafc; color: #333; }
        .navbar-brand { font-weight: bold; color: #e75480 !important; }
        footer { background-color: #e75480; color: white; }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">🌸 AbytaFlorist</a>
            <div>
                <a class="nav-link d-inline text-dark" href="{{ url('/') }}">Home</a>
                <a class="nav-link d-inline text-dark" href="{{ url('/about') }}">About</a>
                <a class="nav-link d-inline text-dark" href="{{ url('/program') }}">Products</a>
                <a class="nav-link d-inline text-dark" href="{{ url('/our-team') }}">Our Team</a>
                <a class="nav-link d-inline text-dark" href="{{ url('/contact-us') }}">Contact</a>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="container mt-4 mb-5">
        @yield('content')
    </div>

    {{-- Footer --}}
    <footer class="text-center py-3">
        <small>© {{ date('Y') }} AbytaFlorist — Crafted with love 💐</small>
    </footer>
</body>
</html>
