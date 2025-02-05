<button class="header__menu js-header-menu br--small">
    <img class="header__menu-icon js-header-menu-icon" src="{{ asset('images/svg/menu.svg') }}" alt="nav-menu">
</button>
<nav class="header__navbar js-header-navbar br">
    <a href="{{ route('home') }}" class="header__navbar-item">
        <img class="header__navbar-item-icon" src="{{ asset('images/svg/home.svg')}}" alt="Home">
        Home
    </a>
    <a href="/contact" class="header__navbar-item">
        <img class="header__navbar-item-icon" src="{{ asset('images/svg/send.svg') }}" alt="Contact">
        Contact
    </a>
    <a href="/reviews" class="header__navbar-item">
        <img class="header__navbar-item-icon" src="{{ asset('images/svg/notepad.svg') }}" alt="Reviews">
        Reviews
    </a>
    <a href="/leave-a-review" class="header__navbar-item">
        <img class="header__navbar-item-icon" src="{{ asset('images/svg/speaking-head.svg') }}" alt="Leave a review">
        Leave a review
    </a>
    <a href="/recent-news" class="header__navbar-item">
        <img class="header__navbar-item-icon" src="{{ asset('images/svg/infinity.svg') }}" alt="Recent news">
        Recent news
    </a>
    <a href="/resources" class="header__navbar-item">
        <img class="header__navbar-item-icon" src="{{ asset('images/svg/resources.svg') }}" alt="Resources">
        Resources
    </a>
</nav>