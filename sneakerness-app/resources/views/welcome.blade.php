<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

</head>

<body class="">
    <nav class="menu-container">
        <!-- burger menu -->
        <input type="checkbox" aria-label="Toggle menu" />
        <span></span>
        <span></span>
        <span></span>

        <!-- logo -->
        <a href="#" class="menu-logo">
            <img src="https://woovin.com/wp-content/uploads/2023/07/sneakerness.webp" alt="My Awesome Website" />
        </a>

        <!-- menu items -->
        <div class="menu">
            <ul>
                <li>
                    <a href="/">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#stands">
                        Stands
                    </a>
                </li>
                <li>
                    <a href="#tickets">
                        Tickets
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#signup">
                        Sign-up
                    </a>
                </li>
                <li>
                    <a href="#login">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Right navigation -->
    @if (Route::has('login'))
        <div class="flex gap-4">
            @auth
                <a href="{{ url('/dashboard') }}"
                    class="px-6 py-2 border border-black dark:border-white text-[#1b1b18] dark:text-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black rounded transition-all duration-200">
                    Dashboard
                </a>
            @else
                {{-- <a href="{{ route('login') }}"
                    class="px-6 py-2 border border-black dark:border-white text-[#1b1b18] dark:text-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black rounded transition-all duration-200">
                    Log in
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="px-6 py-2 border border-black dark:border-white text-[#1b1b18] dark:text-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black rounded transition-all duration-200">
                        Register
                    </a>
                @endif --}}
            @endauth
        </div>
    @endif
    </nav>

    <!-- Page Content -->
    <div class="flex items-center justify-center gap-8 p-6">
        <img src="https://woovin.com/wp-content/uploads/2023/07/sneakerness.webp" alt="sneaker foto" class="mb-4 w-100 h-auto" >
        <div>
            <h1>Welcome to Sneakerness</h1>
            <p>Your one-stop shop for all things sneakers.</p>
        </div>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>