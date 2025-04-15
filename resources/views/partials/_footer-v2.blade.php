
<div class="v2footer__content">
    <div class="v2footer__content-menu">
        <h4 class="v2footer__content-title">Menu</h4>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('home') }}#section--reviews">Reviews</a>
        <a href="{{ route('home') }}#section--contact">Contact</a>
    </div>
    <div class="v2footer__content-links scroll-centered" id="section--links">
        <h4 class="v2footer__content-title">Links</h4>
        <a href="/recent-news">News</a>
        <a href="/resources">Resources</a>
        <a href="/leave-a-review">Write a review</a>
    </div>
    <div class="v2footer__content-contact">
        <h4 class="v2footer__content-title">
            <a href="/contact">Contact me</a>
        </h4>
        <span class="v2footer__socials">
            <a href="mailto: {{ config('contact.email') }}">
                <img class="footer__socials--icon-email" src="{{ asset('images/svg/footer/mail-white.svg') }}" alt="email" loading="lazy">
            </a>
            <a href="tel: {{ config('contact.mobile') }}">
                <img class="footer__socials--icon-whatsapp" src="{{ asset('images/svg/footer/whatsapp-white.svg') }}" alt="whatsapp" loading="lazy">
            </a>
        </span>
    </div>

    <div class="v2footer__content-signature">
        &#169 {{ date('Y') }} Joshua Edwards All rights Reserved
    </div>
</div>
<div class="v2footer__credits">
    Website created by <a href="{{ config('contact.linkedin') }}">Joshua Edwards</a>, designed by Shining Yu
</div>
