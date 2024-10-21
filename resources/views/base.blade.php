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
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <style>
        .container {
          display: flex;
        }

        .sticky-graphic {
          position: sticky;
          top: 0;
          height: 100vh;
          width: 40%;
          background: lightblue;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 2em;
        }

        .step {
          margin: 50px 0;
          padding: 20px;
          background: lightgrey;
          width: 60%;
          opacity: 0.3;
          transition: opacity 0.3s ease;
        }

        .step.is-active {
          opacity: 1;
          background: coral;
        }
      </style>
</head>
<body>
    <header class="js-header">
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