@extends('base')

@section('title', 'Recent News - Joshua Edwards Tutoring')
@section('scripts')
@vite('resources/js/twitter-dropdown.js')
@endsection

@section('content')
<div class="pageTitle">{{ $pageInfo['title'] }}</div>
<div class="recent-news__container">
    <div class="recent-news__dropdown">
        <button class="recent-news__dropdown-edexcel br">
            Edexcel
            <img class="arrow-icon--edexcel" src="{{ asset('images/svg/arrow-down.svg') }}" alt="arrow-down">
        </button>
        <div class="recent-news__wrapper-edexcel">
            <a class="twitter-timeline" data-height="600" data-theme="dark" href="{{ config('globals.twitter-api.edexcel') }}">Loading tweets...<div class="loading-spinner"></div></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    <div class="recent-news__dropdown">
        <button class="recent-news__dropdown-ocr br">
            OCR
            <img class="arrow-icon--ocr" src="{{ asset('images/svg/arrow-down.svg') }}" alt="arrow-down">
        </button>
        <div class="recent-news__wrapper-ocr">
            <a class="twitter-timeline" data-height="600" data-theme="dark" href="{{ config('globals.twitter-api.ocr') }}">Loading tweets...<div class="loading-spinner"></div></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
    <div class="recent-news__dropdown">
        <button class="recent-news__dropdown-aqa br">
            AQA
            <img class="arrow-icon--aqa" src="{{ asset('images/svg/arrow-down.svg') }}" alt="arrow-down">
        </button>
        <div class="recent-news__wrapper-aqa">
            <a class="twitter-timeline" data-height="600" data-theme="dark" href="{{ config('globals.twitter-api.aqa') }}">Loading tweets...<div class="loading-spinner"></div></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>

@endsection