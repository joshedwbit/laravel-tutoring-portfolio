<footer>
    <div class="footer br">
        <div class="footer__lhs">
            <div>
                Webiste created by Joshua Edwards - Copyright {{ date('Y') }} &#169;
            </div>
        </div>
        <div class="footer__rhs">
            <div class="footer__rhs__container">
                <a href="mailto: {{ config('contact.email') }}">
                    <img class="footer__rhs__icon--email" src="{{ asset('images/svg/footer/mail.svg') }}" alt="email">
                </a>
                <a href="tel: {{ config('contact.mobile') }}">
                    <img class="footer__rhs__icon--whatsapp" src="{{ asset('images/svg/footer/whatsapp.svg') }}" alt="email">
                </a>
            </div>
        </div>
    </div>
</footer>