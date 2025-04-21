@extends('base')

@section('title', 'Recent News - Joshua Edwards Tutoring')
@section('meta_description', 'Stay updated with the latest news and announcements from key examination bodies. Discover recent developments in syllabus changes, exam updates and more.')
@section('robots_meta', 'noindex')

@push('scripts')
  @vite('resources/js/twitter-dropdown.js')
@endpush

@section('content')
<h1 class="page-title">{{ $pageInfo['title'] }}</h1>
<section class="recent-news__content-container">
    <div class="recent-news__button-container">
        <div class="recent-news__dropdown">
            <button class="js-dropdown-edexcel br">
                Edexcel
                <img class="js-icon-edexcel" src="{{ asset('images/svg/arrow-down.svg') }}" alt="arrow-down" loading="lazy">
            </button>
        </div>
        <div class="recent-news__dropdown">
            <button class="js-dropdown-ocr br">
                OCR
                <img class="js-icon-ocr" src="{{ asset('images/svg/arrow-down.svg') }}" alt="arrow-down" loading="lazy">
            </button>
        </div>
        <div class="recent-news__dropdown">
            <button class="js-dropdown-aqa br">
                AQA
                <img class="js-icon-aqa" src="{{ asset('images/svg/arrow-down.svg') }}" alt="arrow-down" loading="lazy">
            </button>
        </div>
    </div>

    <div class="recent-news__wrapper-container">
        <div class="recent-news__wrapper js-wrapper-edexcel">
            <a class="twitter-timeline" data-height="600" data-theme="dark" data-chrome="noheader noborders noscrollbar" href="{{ config('globals.twitter-api.edexcel') }}">Loading tweets...<div class="loading-spinner"></div></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="recent-news__wrapper js-wrapper-ocr">
            <a class="twitter-timeline" data-height="600" data-theme="dark" data-chrome="noheader noborders noscrollbar" href="{{ config('globals.twitter-api.ocr') }}">Loading tweets...<div class="loading-spinner"></div></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="recent-news__wrapper js-wrapper-aqa">
            <a class="twitter-timeline" data-height="600" data-theme="dark" data-chrome="noheader noborders noscrollbar" href="{{ config('globals.twitter-api.aqa') }}">Loading tweets...<div class="loading-spinner"></div></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</section>

@endsection
