@extends('base')

@section('title', 'Leave a review - Joshua Edwards Tutoring')

@section('content')
<h1 class="page-title">{{ $pageInfo['title'] }}</h1>

<h4 class="leave-a-review__intro">{!! $pageInfo['intro'] !!}</h4>

<form method="POST" action="/review-submitted" enctype="multipart/form-data">
  @csrf

  <fieldset>
    <legend>Basic info</legend>
  <div>
    <label for="name">{{ $pageInfo['label_name'] }}</label>
    <input type="text" name="name" id="name" value="{{old('name')}}"/>

    @error('name')
    <p>{{$message}}</p>
    @enderror
  </div>

  <div>
    <label for="school">{{ $pageInfo['label_school'] }}</label>
    <input type="text" name="school" id="school" value="{{old('school')}}"/>

    @error('school')
    <p>{{$message}}</p>
    @enderror
  </div>

  <div>
    <label for="year_group">{{ $pageInfo['label_year_group'] }}</label>

    <!-- Select Dropdown -->
    <select id="year_group" name="year_group">
        <option value="ks3">KS3</option>
        <option value="year_10">Year 10</option>
        <option value="year_11">Year 11</option>
        <option value="AS">AS</option>
        <option value="A2">A2</option>
    </select>
    @error('year_group')
    <p>{{$message}}</p>
    @enderror
  </div>
  </fieldset>

  <fieldset>
    <legend>Grades</legend>
    <div>
      <label for="predicted">{{ $pageInfo['label_predicted'] }}</label>

      <!-- Select Dropdown -->
      <select id="predicted" name="predicted">
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
      @error('predicted')
      <p>{{$message}}</p>
      @enderror
    </div>

    <div>
      <label for="achieved">{{ $pageInfo['label_achieved'] }}</label>

      <!-- Select Dropdown -->
      <select id="achieved" name="achieved">
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
      @error('achieved')
      <p>{{$message}}</p>
      @enderror
    </div>
  </fieldset>

  <fieldset>
    <div>
      <label for="rating">{{ $pageInfo['label_rating'] }}</label>
      <input type="number" min='1' max='5' name="rating" id="rating" step="1" value={{old('rating')}}/>

      @error('rating')
      <p>{{$message}}</p>
      @enderror
    </div>
  </fieldset>

  <fieldset>
  <div>
    <label for="comments">{{ $pageInfo['label_comments'] }}</label>
    <textarea name="comments" id="comments" rows="5" placeholder="please provide details
    of timeframe, successes, challenges overcome, etc">{{old('comments')}}</textarea>

    @error('comments')
    <p>{{$message}}</p>
    @enderror
  </div>
  </fieldset>

  <fieldset>
  <div>
    <label for="passcode">{{ $pageInfo['label_passcode'] }}</label>
    <input type="text" name="passcode" id="passcode"/>

    @error('passcode')
    <p>{{$message}}</p>
    @enderror
  </div>
  </fieldset>

  <div>
    <button type="submit">
      {{ $pageInfo['submit_text'] }}
    </button>
  </div>
</form>

@endsection