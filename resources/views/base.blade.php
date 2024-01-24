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
</head>
<body class="background">
    <div class="background__wrapper">
        @include('partials._navbar')
        @include('partials._logo')

        <div class="background__overlay br">
            <main>
                @yield('content')
            </main>
        </div>

        <footer>
        @include('partials._footer')
        </footer>
    </div>
</body>
</html>