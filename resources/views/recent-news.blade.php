@extends('base')

@section('content')
<h1 class="home">Recent news page</h1>
<br><br>
{{ $pageInfo['title'] }}
<style>
    .grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 10px;
        padding: 30px 0;
        max-height: 500px;
        overflow: hidden;
    }
</style>
<section class='grid'>
    <div class="recent-news__wrapper-edexcel">
        <a class="twitter-timeline" data-theme="dark" href="{{ config('globals.twitter-api.edexcel') }}">Tweets by PearsonEdexcel</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="recent-news__wrapper-ocr">
        <a class="twitter-timeline" data-theme="dark" href="{{ config('globals.twitter-api.ocr') }}">Tweets by OCR_Maths</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="recent-news__wrapper-aqa">
        <a class="twitter-timeline" data-theme="dark" href="{{ config('globals.twitter-api.aqa') }}">Tweets by AQAMaths</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
</section>
@endsection