@extends('base')

@section('title', 'Resources - Joshua Edwards Tutoring')
@section('meta_description', 'Explore a collection of official past paper questions. Easily filter by year, season, topic and more to get exam ready.')

@section('scripts')
  @vite('resources/js/toggle-filters.js')
@endsection

@section('content')
<h1 class="page-title">{{ $pageInfo['title'] }}</h1>

@php
$isLoggedIn = Auth::check();
@endphp

@if ($isLoggedIn)
<form method="POST" action="/resources-submitted">
    @csrf

    <div class="field">
      <label for="year">Year</label>
      <input type="text" name="year" id="year"/>

      @error('year')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="paper_number">Paper</label>

      <select id="paper_number" name="paper_number">
          <option value="" disabled selected hidden>Please select paper</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
      </select>

      @error('paper_number')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="season">Season</label>

      <select id="season" name="season">
          <option value="" disabled selected hidden>Please select season</option>
          <option value="Winter">Winter</option>
          <option value="Summer">Summer</option>
      </select>

      @error('season')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
        <label for="type">Type</label>

        <select id="type" name="type">
            <option value="" disabled selected hidden>Please select paper type</option>
            <option value="1">Calculator</option>
            <option value="0">Non-calculator</option>
        </select>

        @error('type')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="field">
        <label for="level">Level</label>

        <select id="level" name="level">
            <option value="" disabled selected hidden>Please select level</option>
            <option value="0">Foundation</option>
            <option value="1">Higher</option>
        </select>

        @error('level')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="field">
      <label for="question_number">Question number</label>

      <input type="number" class="field--number" min='1' max='25' name="question_number" id="question_number" step="1"/>
      @error('question_number')

      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
        <label for="topic">Topic</label>

        <select id="topic" name="topic">
          <option value="" disabled selected hidden>Please select topic</option>
            @foreach($topics as $topic) {
              <option value="{{ $topic['topic'] }}">{{ $topic['topic'] }}</option>
            }
            @endforeach
        </select>

        @error('topic')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="field">
        <label for="notes">Notes</label>

        <input type="text" name="notes" id="notes"/>

        @error('notes')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div>
      <button type="submit">
        Save
      </button>
    </div>
  </form>

<div class="page-break"></div>

@endif
<button class="js-add-filter">Show filters</button>

<section class="js-filter-container resources__filters--hidden">
  <form action="/resources-filtered" method="POST">
    @csrf

    <div class="field">
      <label for="filter_year">Filter Year</label>

      <input type="text" name="filter_year" id="filter_year"/>


      @error('filter_year')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="filter_paper_number">Filter Paper</label>

        <input type="checkbox" name="filter_paper_number[]" value="1">1
        <input type="checkbox" name="filter_paper_number[]" value="2">2
        <input type="checkbox" name="filter_paper_number[]" value="3">3

      @error('paper_number')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="filter_season">Filter Season</label>
      <input type="checkbox" name="filter_season[]" value="Winter">Winter
      <input type="checkbox" name="filter_season[]" value="Summer">Summer

      @error('filter_season')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
        <label for="filter_type">Filter Type</label>

      <input type="checkbox" name="filter_type[]" value="1">Calculator
      <input type="checkbox" name="filter_type[]" value="0">Non-calculator

        @error('filter_type')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="field">
        <label for="filter_level">Level</label>
      <input type="checkbox" name="filter_level[]" value="0">Foundation
      <input type="checkbox" name="filter_level[]" value="1">Higher

        @error('filter_level')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="field">
        <label for="filter_topic">Topic</label>

        <select id="filter_topic" name="filter_topic">
          <option value="" disabled selected hidden>Please select topic</option>
            @foreach($topics as $topic) {
              <option value="{{ $topic['topic'] }}">{{ $topic['topic'] }}</option>
            }
            @endforeach
        </select>


        @error('filter_topic')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div>
      <button type="submit">
        Apply filters
      </button>
    </div>

  </form>

  <form action="/resources" method="GET">
    <div>
      <button type="submit">
        Remove filters
      </button>
    </div>
  </form>
</section>


<div class="page-break"></div>

<div class="">{{$results_count}} {{ $results_count == 1  ? 'result' : 'results' }}</div>

<section class="resources--container {{ $isLoggedIn ? 'resources--logged-in' : '' }}">
    <h4 class="resources__header">Year</h4>
    <h4 class="resources__header">Paper</h4>
    <h4 class="resources__header">Season</h4>
    <h4 class="resources__header">Type</h4>
    <h4 class="resources__header">Level</h4>
    <h4 class="resources__header">Question</h4>
    <h4 class="resources__header">Topic(s)</h4>
    <h4 class="resources__header">Notes</h4>
    @if ($isLoggedIn)
    <h4 class="resources__header"></h4>
    <h4 class="resources__header"></h4>
    @endif

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

        <div>
            {{ $paper['notes'] }}
        </div>

        @if ($isLoggedIn)
        <div>
          <a href="/edit-resource/{{ $paper->id }}">Edit</a>
        </div>

        <form action="/delete-resource/{{ $paper->id }}" method="POST">
          @csrf
          @method('DELETE')
          <button>Delete</button>
        </form>
        @endif
    @endforeach

    </section>

@endsection