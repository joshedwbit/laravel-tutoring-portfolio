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

<div class="v2homepage__current-information">I currently work as a software developer and in my free time I tutor mathematics</div>
<div class="v2homepage__background-info-container">
    <div class="v2homepage__background-info">
        The class of 2024/2025 will be my fifth consecutive year one on one tutoring.  My aim is to motivate students of all
         levels to work hard to achieve desired grades and beyond.<br>
         <a href="/about" class="v2homepage__background-info-continue">Continue reading</a>
    </div>
</div>

<div class="v2homepage__subtitle v2homepage__subtitle--reviews">Reviews</div>
@include('partials._homepage-reviews-carousel', ['reviews' => $reviews])


@endsection