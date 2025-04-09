<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'JB Koskont')</title>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="bg-gray-900 text-gray-200">

    <!-- Navbar -->
    <nav class="bg-black p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ auth()->check() ? route('home') : route('home') }}" class="text-gold-500 font-bold text-2xl">JB Koskont</a>
            <div>
                @auth
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-orange-500 mx-4">Dashboard</a>
                    <a href="{{ route('invoices.index') }}" class="text-gray-300 hover:text-orange-500 mx-4">Invoices</a>
                    <a href="{{ route('clients.index') }}" class="text-gray-300 hover:text-orange-500 mx-4">Clients</a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-blue-400 mx-4">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-300 hover:text-blue-400 mx-4">Register</a>
                @endauth
            </div>
            @auth
                <div>
                    <span class="text-gray-300 mr-4">Welcome, {{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="text-red-500 hover:text-red-400">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </div>
            @endauth
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto py-10">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-black p-4 text-center text-gray-300 border-t border-gold-500 mt-10">
        <p>&copy; {{ date('Y') }} JB Koskont | All Rights Reserved</p>
    </footer>

</body>
</html>
