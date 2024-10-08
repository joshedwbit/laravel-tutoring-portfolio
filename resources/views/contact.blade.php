@extends('base')

@section('title', 'Contact - Joshua Edwards Tutoring')
@section('meta_description', 'Have questions or want to get started? Contact me directly to discuss the next steps.')

@section('content')
<h1 class="page-title">{{ $pageInfo['title'] }}</h1>

<section class="contact br">
    <div class="contact__item__wrapper">
        <div class="contact__item--linkedin">
            <div class="contact__item__text br">
                Visit my <a href="{{ config('contact.linkedin') }}" target="_blank">Linkedin</a>
            </div>
        </div>
    </div>

    <div class="contact__item__wrapper">
        <div class="contact__item--email">
            <div class="contact__item__text br">
                {{ config('contact.email') }}
                <p><a href="mailto:{{ config('contact.email') }}">send an email now</a></p>
            </div>
        </div>
    </div>

    <div class="contact__item__wrapper">
        <div class="contact__item--whatsapp">
            <div class="contact__item__text br">
                <p class="nowrap">
                    {{ config('contact.mobile') }}
                </p>
                <p>Drop a message or <a href="tel:{{ config('contact.mobile') }}">call now</a></p>
            </div>
        </div>
    </div>
</section>
@endsection