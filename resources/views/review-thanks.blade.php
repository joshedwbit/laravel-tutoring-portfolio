@extends('base')

@section('title', 'Review thanks - Joshua Edwards Tutoring')
@section('meta_description', 'Thank you for a leaving a review.')
@section('robots_meta', 'noindex')

@section('content')
<h1 class="home">Thanks for your feedback!</h1>
<h4>You can now view this in the <a href="/reviews">Reviews</a> section</h4>
<p>Your feedback:</p>
<ul>
    <li>First name: {{ $review['name'] ?? 'Not provided' }}</li>
    <li>School: {{ $review['school'] ?? 'Not provided' }}</li>
    <li>Year group: {{ $review['year_group'] }}</li>
    <li>Predicted grade: {{ $review['predicted'] }}</li>
    <li>Grade achieved: {{ $review['achieved'] }}</li>
    <li>Rating: {{ $review['rating'] }}</li>
    <li>Comments: {{ $review['comments'] }}</li>
</ul>
<p>More to say? why not <a href="leave-a-review">Leave another review</a>.</p>
@endsection