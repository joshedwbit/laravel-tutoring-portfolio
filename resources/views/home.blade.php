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
        <img src="{{ asset('images/jpg/biopic.jpeg') }}" alt="profile picture" title="Joshua Edwards Tutoring" class="br">
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
<div class="owl-carousel owl-theme">
    <div><img src="https://picsum.photos/200/200" alt="Slide 1" title="1"></div>
    <div><img src="https://picsum.photos/205/200" alt="Slide 2" title="2"></div>
    <div><img src="https://picsum.photos/200/205" alt="Slide 3" title="3"></div>
    <div><img src="https://picsum.photos/195/250" alt="Slide 4" title="4"></div>
    <div><img src="https://picsum.photos/200/195" alt="Slide 5" title="5"></div>
    <div><img src="https://picsum.photos/195/195" alt="Slide 6" title="6"></div>
    <div><img src="https://picsum.photos/205/205" alt="Slide 7" title="7"></div>
  </div>
@endsection