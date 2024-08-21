@extends('base')

@section('title', 'Edit Resource - Joshua Edwards Tutoring')

@section('content')
<h1 class="page-title">Edit resource</h1>

<section>
    <form action="/edit-resource/{{$resource->id}}" method="POST">
        @csrf
        @method('PUT')

        <div class="field">
            <label for="year">Year</label>

            <div class="field__value">
                <input type="text" name="year" id="year" value="{{$resource->year}}"/>
            </div>

            @error('year')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <div class="field">
            <label for="paper_number">Paper</label>

            <div class="field__value">
                <select id="paper_number" name="paper_number">
                    <option value="{{$resource->paper_number}}" hidden>{{$resource->paper_number}}</option>
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
                    <option value="{{$resource->season}}" selected hidden>{{$resource->season}}</option>
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
            @php
            $previousPaperType = $resource->calculator == '1' ? 'Calculator' : 'Non-calculator';
            @endphp

            <div class="field__value">
            <select id="type" name="type">
                <option value="{{$previousPaperType}}" selected hidden>{{$previousPaperType}}</option>
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
            @php
            $previousPaperLevel = $resource->higher == '1' ? 'Higher' : 'Foundation';
            @endphp

            <div class="field__value">
            <select id="level" name="level">
                <option value="{{$previousPaperLevel}}" selected hidden>{{$previousPaperLevel}}</option>
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
                <input type="number" class="field--number" min='1' max='25' name="question_number" id="question_number" step="1" value="{{$resource->question_number}}"/>
            </div>

            @error('question_number')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <div class="field">
            <label for="topic">Topic</label>

            <div class="field__value">
            <input type="text" name="topic" id="topic" value="{{$resource->topic}}"/>
            </div>

            @error('topic')
            <p class="error">{{$message}}</p>
            @enderror
        </div>

        <button type="submit" class="submit">Save changes</button>
    </form>
</section>
@endsection