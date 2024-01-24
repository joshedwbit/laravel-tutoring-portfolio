<footer class="footer br">
    <span class="footer__signature">
        Website created by Joshua Edwards - Copyright {{ date('Y') }} &#169;
    </span>
    <span class="footer__socials">
        <a href="mailto: {{ config('contact.email') }}">
            <img class="footer__socials--icon-email" src="{{ asset('images/svg/footer/mail.svg') }}" alt="email">
        </a>
        <a href="tel: {{ config('contact.mobile') }}">
            <img class="footer__socials--icon-whatsapp" src="{{ asset('images/svg/footer/whatsapp.svg') }}" alt="whatsapp">
        </a>
    </span>
</footer>