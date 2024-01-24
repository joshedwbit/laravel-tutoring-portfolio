@extends('base')

@section('title', 'Home - Joshua Edwards Tutoring')

@section('content')
<div class="homepage">
    <h2 class="pageTitle">{{ $pageInfo['title'] }}</h2>
    <section class="homepage__header__about-me">
        <div>
            <h3 class="homepage__header__title">{{ $pageInfo['about_title'] }}</h3>
            <div>
                {{ $pageInfo['about_copy'] }}
            </div>
        </div>
    </section>
    <section class="homepage__header__aim">
        <h3 class="homepage__header__title">{{ $pageInfo['aim_title'] }}</h3>
        <div>
            {{ $pageInfo['aim_copy'] }}
        </div>
    </section>
    <section class="homepage__body__biopic">
        <img src="{{ asset('images/jpg/biopic.jpeg') }}" alt="profile picture" title="Joshua Edwards Tutoring Ltd" class="br">
    </section>
    <section class="homepage__body__background">
        <h3 class="homepage__body__title">{{ $pageInfo['background_title'] }}</h3>
        <div>
            {{ $pageInfo['background_copy'] }}
        </div>
    </section>
    <section class="homepage__body__approach">
        <h3 class="homepage__body__title">{{ $pageInfo['approach_title'] }}</h3>
        <div>
            {{ $pageInfo['approach_copy'] }}<br>
            If interested please <a href="/contact" >get in contact.</a>
        </div>
    </section>
</div>
@endsection