<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Laravel POS')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">

            <a href="{{ route('home') }}" class="logo">
                POS SYSTEM
            </a>

            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('customers.index') }}">Customers</a>
                <a href="{{ route('users.index') }}">Users</a>
            </div>

        </div>
    </nav>

    <main class="container">

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </main>

    <footer class="footer">
        <p>Laravel POS System &copy; {{ date('Y') }} | All Rights Reserved</p>
    </footer>

</body>
</html>