{{-- <div class="">base template</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Joshua Edwards Tutoring')</title>
    <meta charset="UTF-8">
    <meta name="description" content="@yield('meta_description', 'Welcome to Joshua Edwards tutoring portfolio. Discover personalised math tutoring services designed to help students achieve their academic goals. Explore resources, read reviews, and find out how I can support your learning journey.')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="@yield('robots_meta', 'index, follow')">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('scripts')
    <link href="https://fonts.cdnfonts.com/css/callie-chalk-font" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/djb-chalk-it-up" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon/initials-icon.ico') }}">
</head>
<body>
    <header>
        @include('partials._navbar')
        @include('partials._logo')
    </header>

    <main class="br">
        @yield('content')
    </main>

    <footer>
        @include('partials._footer')
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>