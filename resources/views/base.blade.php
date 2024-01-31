{{-- <div class="">base template</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Joshua Edwards Tutoring')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</body>
</html>