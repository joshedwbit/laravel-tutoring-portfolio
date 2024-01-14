{{-- <div class="">base template</div> --}}
<header>
@include('partials._navbar')
@include('partials._logo')
</header>

<main style="border: 1px solid red;">
@yield('content')
</main>

<footer>
@include('partials._footer')
</footer>