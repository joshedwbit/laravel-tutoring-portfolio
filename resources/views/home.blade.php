@extends('base')

@section('title', 'Home - Joshua Edwards Tutoring')
@section('meta_description', 'Welcome to Joshua Edwards Tutoring! I specialise in personalised maths tutoring for KS3 to A-level students, with a proven track record of outstanding results. My aim is to support dedicated learners in achieving their academic goals and exceeding their expectations. Learn how personalised tutoring can help you.')

@section('content')
<section class="homepage">
    <h1 class="page-title">{{ $pageInfo['title'] }}</h1>
    <div>
        <h3 class="homepage__title">{{ $pageInfo['about_title'] }}</h3>
        {!! $pageInfo['about_copy'] !!}
    </div>
    <div>
        <h3 class="homepage__title">{{ $pageInfo['aim_title'] }}</h3>
        {!! $pageInfo['aim_copy'] !!}
    </div>
    <figure class="homepage__image">
        <img src="{{ asset('images/jpg/biopic.jpeg') }}" alt="profile picture" title="Joshua Edwards Tutoring" class="br" loading="lazy">
    </figure>
    <div class="homepage__background">
        <h3 class="homepage__title">{{ $pageInfo['background_title'] }}</h3>
        <div>
            {!! $pageInfo['background_copy'] !!}
        </div>
    </div>
    <div class="homepage__approach">
        <h3 class="homepage__title">{{ $pageInfo['approach_title'] }}</h3>
        <div>
            {!! $pageInfo['approach_copy'] !!}
            <p>If interested please <a class="homepage__link" href="/contact">get in contact.</a></p>
        </div>
    </div>
</section>

<div class="swiper">
    <div class="swiper-wrapper swiper-wrapper-centered">
        <div class="swiper-slide"><img src="{{ asset('images/png/a2-a.png') }}" alt="a2 grade a" title="a2 grade a"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/a2-b.png') }}" alt="a2 grade b" title="a2 grade b"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-5.png') }}" alt="gcse grade 5" title="gcse grade 5"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-5(2).png') }}" alt="gcse grad 5" title="gcse grad 5"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-6.png') }}" alt="gcse grade 6" title="gcse grade 6"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-6(2).png') }}" alt="gcse grade 6" title="gcse grade 6"></div>
        <div class="swiper-slide"><img src="{{ asset('images/png/gcse-8.png') }}" alt="gcse grade 8" title="gcse grade 8"></div>
    </div>

    <div class="swiper-pagination"></div>
</div>
@endsection