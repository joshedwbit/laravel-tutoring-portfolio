@extends('base')

@section('title', 'Reviews - Joshua Edwards Tutoring')

@section('content')
<h1 class="home">{{ $pageInfo['title'] }}</h1>

@foreach ($reviews as $review)
{{ $pageInfo['label_added'] }}
<br>{{ $review['created_at'] }}

<br>{{ $pageInfo['label_name'] }}
<br>{{ $review['name'] }}

<br>{{ $pageInfo['label_school'] }}
<br>{{ $review['school'] }}

<br>{{ $pageInfo['label_predicted'] }}
<br>{{ $review['predicted'] }}

<br>{{ $pageInfo['label_achieved'] }}
<br>{{ $review['achieved'] }}

<br>{{ $pageInfo['label_year_group'] }}
<br>{{ $review['year_group'] }}

<br>{{ $pageInfo['label_rating'] }}
<br>{{ $review['rating'] }}

<br>{{ $pageInfo['label_comments'] }}
<br>{{ $review['comments'] }}
<br><br>
@endforeach
@endsection