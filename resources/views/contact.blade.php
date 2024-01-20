@extends('base')

@section('title', 'About - Joshua Edwards Tutoring')

@section('content')
<div class="pageTitle">{{ $pageInfo['title'] }}</div>

<div class="contact">
    <div class="contact__item__wrapper">
        <div class="contact__item--linkedin">
            <div class="contact__item__text">
                <div class="contact__item__text--subtitle">
                    Visit my <a href="{{ config('contact.linkedin') }}" target="_blank">Linkedin</a>
                </div>
            </div>
        </div>
    </div>

    <div class="contact__item__wrapper">
        <div class="contact__item--email">
            <div class="contact__item__text">
                <div class="contact__item__text--subtitle">
                    {{ config('contact.email') }} <br>
                    <a href="mailto:{{ config('contact.email') }}">send an email now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="contact__item__wrapper">
        <div class="contact__item--whatsapp">
            <div class="contact__item__text">
                <div class="contact__item__text--subtitle">
                    {{ config('contact.mobile') }} <br>
                    Drop a message or <a href="tel:{{ config('contact.mobile') }}">call now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection