@extends('base')

@section('title', 'Leave a review - Joshua Edwards Tutoring')

@section('content')
<h1 class="page-title">{{ $pageInfo['title'] }}</h1>

<div class="leave-a-review__intro">{!! $pageInfo['intro'] !!}</div>

<form method="POST" action="/review-submitted">
  @csrf

  <div class="field">
    <label for="name">{{ $pageInfo['label_name'] }}</label>

    <div class="field__value">
      <input type="text" name="name" id="name" value="{{old('name')}}"/>
    </div>
  </div>

  <div class="field">
    <label for="school">{{ $pageInfo['label_school'] }}</label>

    <div class="field__value">
      <input type="text" name="school" id="school" value="{{old('school')}}"/>
    </div>
  </div>

  <div class="field">
    <label for="year_group">{{ $pageInfo['label_year_group'] }}</label>

    <div class="field__value">
      <select id="year_group" name="year_group">
          <option value="" disabled selected hidden>Please select year group</option>
          <option value="ks3">KS3</option>
          <option value="year-10">Year 10</option>
          <option value="year-11">Year 11</option>
          <option value="AS">AS</option>
          <option value="A2">A2</option>
      </select>
    </div>

    @error('year_group')
    <p class="error">{{$message}}</p>
    @enderror
  </div>

  <div class="field">
    <label for="predicted">{{ $pageInfo['label_predicted'] }}</label>

    <div class="field__value">
      <select id="predicted" name="predicted">
          <option value="" disabled selected hidden>Please select the grade that was predicted</option>
          <option value="E">E</option>
          <option value="D">D</option>
          <option value="C">C</option>
          <option value="B">B</option>
          <option value="A">A</option>
          <option value="A*">A*</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
      </select>
    </div>

    @error('predicted')
    <p class="error">{{$message}}</p>
    @enderror
  </div>

  <div class="field">
    <label for="achieved">{{ $pageInfo['label_achieved'] }}</label>

    <div class="field__value">
      <select id="achieved" name="achieved">
          <option value="" disabled selected hidden>Please select the achieved grade</option>
          <option value="E">E</option>
          <option value="D">D</option>
          <option value="C">C</option>
          <option value="B">B</option>
          <option value="A">A</option>
          <option value="A*">A*</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
      </select>
    </div>

    @error('achieved')
    <p class="error">{{$message}}</p>
    @enderror
  </div>

  <div class="field">
    <label for="rating">{{ $pageInfo['label_rating'] }}</label>

    <div class="field__value">
      <input type="number" class="field--rating" min='1' max='5' name="rating" id="rating" step="1"/>
    </div>

    @error('rating')
    <p class="error">{{$message}}</p>
    @enderror
  </div>

  <div class="field">
    <label for="comments">{{ $pageInfo['label_comments'] }}</label>

    <div class="field__value">
      <textarea name="comments" class="field--textarea br" id="comments" rows="5" placeholder="please provide details of timeframe, successes, challenges overcome, etc">{{old('comments')}}</textarea>
    </div>

    @error('comments')
    <p class="error">{{$message}}</p>
    @enderror
  </div>

  <div class="field">
    <label for="passcode">{{ $pageInfo['label_passcode'] }}</label>

    <div class="field__value">
      <input type="text" name="passcode" id="passcode"/>
    </div>

    @error('passcode')
    <p class="error">{{$message}}</p>
    @enderror
  </div>

  <div>
    <button class="submit" type="submit">
      {{ $pageInfo['submit_text'] }}
    </button>
  </div>
</form>

@endsection