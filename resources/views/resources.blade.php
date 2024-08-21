@extends('base')

@section('title', 'Resources - Joshua Edwards Tutoring')

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

      <div class="field__value">
        <input type="text" name="year" id="year"/>
      </div>

      @error('year')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="paper_number">Paper</label>

      <div class="field__value">
        <select id="paper_number" name="paper_number">
            <option value="" disabled selected hidden>Please select paper</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
      </div>

      @error('paper_number')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="season">Season</label>

      <div class="field__value">
        <select id="season" name="season">
            <option value="" disabled selected hidden>Please select season</option>
            <option value="Winter">Winter</option>
            <option value="Summer">Summer</option>
        </select>
      </div>

      @error('season')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
        <label for="type">Type</label>

        <div class="field__value">
          <select id="type" name="type">
              <option value="" disabled selected hidden>Please select paper type</option>
              <option value="Calculator">Calculator</option>
              <option value="Non-calculator">Non-calculator</option>
          </select>
        </div>

        @error('type')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="field">
        <label for="level">Level</label>

        <div class="field__value">
          <select id="level" name="level">
              <option value="" disabled selected hidden>Please select level</option>
              <option value="Foundation">Foundation</option>
              <option value="Higher">Higher</option>
          </select>
        </div>

        @error('level')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="field">
      <label for="question_number">Question number</label>

      <div class="field__value">
        <input type="number" class="field--number" min='1' max='25' name="question_number" id="question_number" step="1"/>
      </div>

      @error('question_number')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
        <label for="topic">Topic</label>

        <div class="field__value">
          <input type="text" name="topic" id="topic"/>
        </div>

        @error('topic')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div>
      <button class="submit" type="submit">
        Save
      </button>
    </div>
  </form>
@endif

<section class="resources--container {{ $isLoggedIn ? 'resources--logged-in' : '' }}">
    <h4 class="resources__header">Year</h4>
    <h4 class="resources__header">Paper</h4>
    <h4 class="resources__header">Season</h4>
    <h4 class="resources__header">Type</h4>
    <h4 class="resources__header">Level</h4>
    <h4 class="resources__header">Question</h4>
    <h4 class="resources__header">Topic(s)</h4>
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