<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.exzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Laravel App CSS (if needed) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <!-- Include Top Menu -->
    @include('layouts.menu')

    <!-- Main Page Wrapper -->
    <div class="min-h-screen bg-gray-100">

        <!-- Include Breeze's Auth Navigation -->
        {{-- @include('layouts.navigation') --}}

        <!-- Page Heading (if any) -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>

            @auth
                <div class="text-end px-4 pt-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Logout
                        </button>
                    </form>
                </div>
            @endauth
            {{ $slot }}

        </main>
    </div>

    <!-- Footer Include -->
    @include('layouts.footer')

    <!-- jQuery First -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>

    <!-- Other JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/Font-Awesome.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery.countup.min.js') }}"></script> --}}
    <script src="{{ asset('js/jquery.exzoom.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/sticky_sidebar.js') }}"></script>
    <script src="{{ asset('js/venobox.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>

    <!-- Main JS (Always Last) -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
