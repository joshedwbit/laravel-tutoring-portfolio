<nav class="v2header__nav">
    <a href="{{ route('home')}}" class="v2header__nav-logo">
        JE
    </a>

    <div class="v2header__navbar">
        {{-- todo implement toggle js  --}}
        <a href="/new-home" class="v2header__navbar-item active">Home</a>
        <a href="/new-home#section--reviews" class="v2header__navbar-item">Reviews</a>
        <a href="/new-home#section--contact" class="v2header__navbar-item">Contact</a>
        <a href="/new-home#section--links" class="v2header__navbar-item">Links</a>
    </div>

    <a href="#section--contact" class="button v2header__contact-button button--standard">
        Contact me
    </a>
</nav>