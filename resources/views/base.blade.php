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
<body>
    <div class="content__wrapper">
        @include('partials._navbar')
        @include('partials._logo')

        <main class="content__overlay br">
            @yield('content')
        </main>

        <footer>
            @include('partials._footer')
        </footer>
    </div>
</body>
</html>