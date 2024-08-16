@extends('base')

@section('title', 'Resources - Joshua Edwards Tutoring')

@section('content')
<h1 class="page-title">{{ $pageInfo['title'] }}</h1>


<section class="resources--container">
    <h4 class="resources__header">Year</h4>
    <h4 class="resources__header">Paper</h4>
    <h4 class="resources__header">Season</h4>
    <h4 class="resources__header">Type</h4>
    <h4 class="resources__header">Level</h4>
    <h4 class="resources__header">Question</h4>
    <h4 class="resources__header">Topic(s)</h4>

    @foreach ($papers as $paper)
        <div>
            {{ $paper['year'] }}
        </div>

        <div>
            {{ $paper['paper_number'] }}
        </div>

        <div>
            {{ $paper['season'] }}
        </div>

        <div>
            {{ $paper['calculator'] ? 'calculator' : 'non-calc' }}
        </div>

        <div>
            {{ $paper['higher'] ? 'higher' : 'foundation' }}
        </div>

        <div>
            {{ $paper['question_number'] }}
        </div>

        <div>
            {{ $paper['topic'] }}
        </div>
    @endforeach

    </section>

@endsection