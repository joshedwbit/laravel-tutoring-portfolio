{{-- <div class="">base template</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Joshua Edwards Tutoring')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss', 'resources/js/app.js')
</head>
<body>



<header class="header">
@include('partials._navbar')
@include('partials._logo')
</header>

<main style="border: 1px solid red;">
@yield('content')
</main>

<footer>
@include('partials._footer')
</footer>

</body>
</html>