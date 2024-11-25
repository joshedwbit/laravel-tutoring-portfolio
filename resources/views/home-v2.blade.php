@extends('base-v2')

@section('title', 'Home - Joshua Edwards Tutoring')
@section('meta_description', 'Welcome to Joshua Edwards Tutoring! I specialise in personalised maths tutoring for KS3 to A-level students, with a proven track record of outstanding results. My aim is to support dedicated learners in achieving their academic goals and exceeding their expectations. Learn how personalised tutoring can help you.')

@section('content')
<div class="v2homepage__name">Joshua Edwards</div>
<div class="v2homepage__job-title">Math tutor</div>
<div class="v2homepage__education-title">Maths Masters graduate from the University of Nottingham</div>

<figure class="v2homepage__image">
    <img src="{{ asset('images/jpg/biopic.jpeg') }}" alt="profile picture" title="Joshua Edwards Tutoring" class="br" loading="lazy">
</figure>

<div class="v2homepage__current-information" data-aos="fade-right">I currently work as a software developer and in my free time I tutor mathematics.</div>
<div class="v2homepage__current-information" data-aos="fade-right">Experience tutoring KS3, KS4, and university level maths, all with exceptional results.</div>
<div class="v2homepage__background-info-container">
    <div class="v2homepage__background-info" data-aos="fade-left">
        The class of 2024/2025 will be my fifth consecutive year one on one tutoring.  My aim is to motivate students of all
         levels to work hard to achieve desired grades and beyond.<br>
         <details>
            <summary class="v2homepage__background-info-continue">Continue reading</summary>
            <p class="v2homepage__background-info-continue-item">
                Through my experience, I’ve found it’s rarely mathematical ability holding students back, rather a lack of confidence.
            </p>
            <p class="v2homepage__background-info-continue-item">
                My approach involves adapting my teaching style to meet the needs and learning preferences of each student.
            </p>
            <p class="v2homepage__background-info-continue-item">
                By creating a supportive environment, I work to build their confidence, spark a genuine interest in the subject, and inspire a real desire to succeed.
            </p>
         </details>
    </div>
</div>

<div class="v2homepage__subtitle v2homepage__subtitle--reviews scroll-centered" id="section--reviews">Reviews</div>
<a href="/leave-a-review" class="v2homepage__leave-a-review button button--standard">
    Write a review
</a>
@include('partials._homepage-reviews-carousel', ['reviews' => $reviews])

<div class="v2homepage__subtitle v2homepage__subtitle--contact scroll-centered" id="section--contact">Contact</div>
<div class="v2homepage__contact" data-aos="fade-up" data-aos-duration="800">
    <a class="v2homepage__contact-item" href="mailto:{{ config('contact.email') }}">
        <div class="v2homepage__contact--label v2homepage__contact--label-email">
            Gmail
            <x-external-link-svg />
        </div>
        <div class="v2homepage__contact--value v2homepage__contact--value--email">
            {{ config('contact.email') }}
        </div>
    </a>

    <a class="v2homepage__contact-item" href="tel:{{ config('contact.mobile') }}">
        <div class="v2homepage__contact--label v2homepage__contact--label-whatsapp">
            Whatsapp
            <x-external-link-svg />
        </div>
        <div class="v2homepage__contact--value v2homepage__contact--value--whatsapp">
            {{ config('contact.mobile') }}
        </div>
    </a>

    <a class="v2homepage__contact-item" href="{{ config('contact.linkedin') }}" target="_blank">
        <div class="v2homepage__contact--label v2homepage__contact--label-linkedin">
            Linkedin
            <x-external-link-svg />
        </div>
        <div class="v2homepage__contact--value v2homepage__contact--value--linkedin">
            /in/joshua-edwards
        </div>
    </a>
</div>

<section class="v2homepage__stories--container" data-aos="fade-up">
    <div class="v2homepage__subtitle v2homepage__subtitle--stories">Success stories</div>
    <div class="feedback-success-carousel--container">
        @include('partials._feedback-success-carousel-v2')
    </div>
</section>
@endsection