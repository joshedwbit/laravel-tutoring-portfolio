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

<section class="photoswipe homepage">
    <div id="gallery--getting-started">
        <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-2500.jpg"
            data-pswp-width="1669"
            data-pswp-height="2500"
            target="_blank">
            <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/2/img-200.jpg" alt="" />
        </a>
        <a href="https://cdn.photoswipe.com/photoswipe-demo-images/photos/7/img-2500.jpg"
            data-pswp-width="1875"
            data-pswp-height="2500"
            {{-- data-cropped="true" --}}
            target="_blank">
            <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/7/img-200.jpg" alt="" />
        </a>
        <a href="https://unsplash.com"
            data-pswp-src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-2500.jpg"
            {{-- data-pswp-src takes priority over href  --}}
            data-pswp-width="2500"
            data-pswp-height="1666"
            target="_blank">
            <img src="https://cdn.photoswipe.com/photoswipe-demo-images/photos/3/img-200.jpg" alt="" />
        </a>
      </div>
</section>
@endsection