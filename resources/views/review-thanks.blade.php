@extends('base')

@section('content')
<h1 class="home">{{ $pageInfo['title'] }}</h1>
Thanks {{ $review['name'] }}!
@endsection