@extends('base')

@section('title', 'Resources - Joshua Edwards Tutoring')

@section('content')
<h1 class="page-title">{{ $pageInfo['title'] }}</h1>
{{--
    <div class="reviews__item">
        <h4>Year</h4>
    </div>

    <div class="reviews__item">
        <h4>Paper Number</h4>
    </div>

    <div class="reviews__item">
        <h4>Season</h4>
    </div>

    <div class="reviews__item">
        <h4>Calculator</h4>
    </div>

    <div class="reviews__item">
        <h4>higher</h4>
    </div>

    <div class="reviews__item">
        <h4>question number</h4>
    </div>

    <div class="reviews__item">
        <h4>Topic(s)</h4>
    </div> --}}
@foreach ($papers as $paper)
    <div class="reviews__item">
        {{ $paper['year'] }}
    </div>

    <div class="reviews__item">
        {{ $paper['paper_number'] }}
    </div>

    <div class="reviews__item">
        {{ $paper['season'] }}
    </div>

    <div class="reviews__item">
        {{ $paper['calculator'] ? 'calculator' : 'non-calculator' }}
    </div>

    <div class="reviews__item">
        {{ $paper['higher'] ? 'higher' : 'foundation' }}
    </div>

    <div class="reviews__item">
        {{ $paper['question_number'] }}
    </div>

    <div class="reviews__item">
        {{ $paper['topic'] }}
    </div>
    @endforeach

@endsection