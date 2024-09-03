@extends('base')

@section('title', 'Reviews - Joshua Edwards Tutoring')
@section('meta_description', 'Read reviews from past students to discover how tutoring has made a difference. Want to share your own experience? Leave a review!')

@section('content')
<h1 class="page-title">{{ $pageInfo['title'] }}</h1>


@foreach ($reviews as $review)
<section class="reviews reviews--container">
    <div class="reviews__item">
        <h4>{{ $pageInfo['label_added'] }}</h4>
        {{ $review['created_at'] }}
    </div>

    <div class="reviews__item">
        <h4>{{ $pageInfo['label_name'] }}</h4>
        {{ $review['name'] }}
    </div>

    <div class="reviews__item">
        <h4>{{ $pageInfo['label_school'] }}</h4>
        {{ $review['school'] }}
    </div>

    <div class="reviews__item">
        <h4>{{ $pageInfo['label_predicted'] }}</h4>
        {{ $review['predicted'] }}
    </div>

    <div class="reviews__item">
        <h4>{{ $pageInfo['label_achieved'] }}</h4>
        {{ $review['achieved'] }}
    </div>

    <div class="reviews__item">
        <h4>{{ $pageInfo['label_year_group'] }}</h4>
        {{ $review['year_group'] }}
    </div>

    {{-- <div class="reviews__item">
        <h4>{{ $pageInfo['label_rating'] }}</h4>
        {{ $review['rating'] }}
    </div> --}}

    <div class="reviews__item reviews--comments">
        <h4>{{ $pageInfo['label_comments'] }}</h4>
        {{ $review['comments'] }}
    </div>

    @if (!$loop->last)
        <div class="page-break"></div>
    @endif
</section>
@endforeach
@endsection