@extends('base-v2')

@section('title', 'Resources - Joshua Edwards Tutoring')
@section('meta_description', 'Explore a collection of official past paper questions. Easily filter by year, season, topic and more to get exam ready.')

@push('scripts')
  @vite('resources/js/resources-filters-sidebar.js')
@endpush

@section('header')
    @include('partials._navbar-v2', ['hideLinks' => true])
@endsection

@section('content')
<h1 class="v2page-title">{{ $pageInfo['title'] }}</h1>

@php
$isLoggedIn = Auth::check();
@endphp


{{-- link to papers - no longer needed  --}}
{{-- <p>
    <a href="https://www.mathsgenie.co.uk/papers.php" target="_blank">Resources external link</a> (mathsgenie.co.uk)
</p> --}}

{{-- display number of results  --}}
<div class="">{{$results_count}} {{ $results_count == 1  ? 'result' : 'results' }}{{ $filtered ? ' (filters applied)' : '' }}</div>

<div class="v2resources__filters-container">
    <button id="sidebarToggle">Add filters</button>
    @if ($filtered)
        <form action="/resources" method="GET">
            <div>
            <button type="submit">
                Remove filters
            </button>
            </div>
        </form>
    @endif
</div>

<div class="v2resources--container">
    <div class="v2resources__sidebar-wrapper">
        <aside class="v2resources__sidebar">
            <button class="sidebar__close" id="sidebarClose">×</button>


            {{-- add a new resource  --}}
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

                    <input type="number" class="field--number" min='1' max='30' name="question_number" id="question_number" step="1"/>
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

            <section class="js-filter-container">
            <form action="{{ route('resources.filtered') }}" method="GET" class="v2resources__filters">
                @csrf

                <div class="field">
                    <label for="filter_year">Year</label>

                    <input type="text" name="filter_year" id="filter_year"/>


                    @error('filter_year')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="filter_paper_number">Paper</label>

                    <input type="checkbox" name="filter_paper_number[]" value="1">1
                    <input type="checkbox" name="filter_paper_number[]" value="2">2
                    <input type="checkbox" name="filter_paper_number[]" value="3">3

                    @error('paper_number')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="field">
                    <label for="filter_season">Season</label>
                    <input type="checkbox" name="filter_season[]" value="Winter">Winter
                    <input type="checkbox" name="filter_season[]" value="Summer">Summer

                    @error('filter_season')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                {{-- <div class="field">
                    <label for="filter_type">Filter Type</label>

                <input type="checkbox" name="filter_type[]" value="1">Calculator
                <input type="checkbox" name="filter_type[]" value="0">Non-calculator

                    @error('filter_type')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div> --}}

                {{-- <div class="field">
                    <label for="filter_level">Level</label>
                <input type="checkbox" name="filter_level[]" value="0">Foundation
                <input type="checkbox" name="filter_level[]" value="1">Higher

                    @error('filter_level')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div> --}}

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
            </section>
        </aside>
    </div>

    <div class="tablet-hide resources-table-desktop">
        <section class="v2resources-table--container {{ $isLoggedIn ? 'resources--logged-in' : '' }}">
            <h4 class="v2resources__header">Date</h4>
            <h4 class="v2resources__header">Paper</h4>
            {{-- <h4 class="v2resources__header">Season</h4> --}}
            {{-- <h4 class="v2resources__header">Type</h4> --}}
            {{-- <h4 class="v2resources__header">Level</h4> --}}
            {{-- <h4 class="v2resources__header">Question</h4> --}}
            <h4 class="v2resources__header">Topic(s)</h4>
            <h4 class="v2resources__header">Notes</h4>
            @if ($isLoggedIn)
            <h4 class="v2resources__header"></h4>
            <h4 class="v2resources__header"></h4>
            @endif
            <h4 class="v2resources__header">Question</h4>
            <h4 class="v2resources__header">Mark scheme</h4>

            @foreach ($papers as $paper)
                @php
                $paperData = $paper->buildPaperData();
                $questionExists = $paperData['questionExists'];
                $questionPath = $paperData['questionPath'];

                $markSchemeExists = $paperData['markSchemeExists'];
                $markSchemePath = $paperData['markSchemePath'];
                @endphp
                <span>
                    {{ $paper['season'] . ' ' . $paper['year'] }}
                </span>

                <span>
                    {{ $paper['paper_number'] }}
                </span>

                {{-- <span>
                    {{ $paper['season'] }}
                </span> --}}

                {{-- <span>
                    {{ $paper['calculator'] ? 'calculator' : 'non-calc' }}
                </span> --}}
                {{--
                <span>
                    {{ $paper['higher'] ? 'higher' : 'foundation' }}
                </span> --}}

                {{-- <span>
                    {{ $paper['question_number'] }}
                </span> --}}

                <span>
                    {{ $paper['topic'] }}
                </span>

                <span>
                    {{ $paper['notes'] }}
                </span>

                @if ($isLoggedIn)
                <span>
                <a href="/edit-resource/{{ $paper->id }}">Edit</a>
                </span>

                <form action="/delete-resource/{{ $paper->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
                </form>
                @endif

                <span class="photoswipe-image">
                    @if ($questionExists)
                        <a
                            href="{{ $questionPath }}"
                            data-pswp-width="{{ getImageDimensions($questionPath)['width'] }}"
                            data-pswp-height="{{ getImageDimensions($questionPath)['height'] }}"
                        >
                        {{ $paper['question_number'] }}
                        </a>
                    @endif
                </span>

                <span class="photoswipe-image">
                    @if ($markSchemeExists)
                        <a
                            href="{{ $markSchemePath }}"
                            data-pswp-width="{{ getImageDimensions($markSchemePath)['width'] }}"
                            data-pswp-height="{{ getImageDimensions($markSchemePath)['height'] }}"
                        >
                        show
                        </a>
                    @endif
                </span>
            @endforeach
        </section>
    </div>

    <div class="tablet-show resources-table-tablet">
        <section class="v2resources-table--container {{ $isLoggedIn ? 'resources--logged-in' : '' }}">
            <h4 class="v2resources__header">Question</h4>
            <h4 class="v2resources__header">Topic(s)</h4>
            <h4 class="v2resources__header">Notes</h4>
            <h4 class="v2resources__header">MS</h4>
            @if ($isLoggedIn)
            <h4 class="v2resources__header"></h4>
            <h4 class="v2resources__header"></h4>
            @endif

            @foreach ($papers as $paper)
                @php
                $paperData = $paper->buildPaperData();
                $questionExists = $paperData['questionExists'];
                $questionPath = $paperData['questionPath'];

                $markSchemeExists = $paperData['markSchemeExists'];
                $markSchemePath = $paperData['markSchemePath'];
                @endphp
                <span class="photoswipe-image">
                    @if ($questionExists)
                        <a
                            href="{{ $questionPath }}"
                            data-pswp-width="{{ getImageDimensions($questionPath)['width'] }}"
                            data-pswp-height="{{ getImageDimensions($questionPath)['height'] }}"
                        >
                        {{ $paper['season'] . ' ' . $paper['year'] }}<br>
                        {{ 'Paper ' . $paper['paper_number']  }}<br>
                        {{ 'Question ' . $paper['question_number'] }}
                        </a>
                    @else
                    {{ $paper['season'] . ' ' . $paper['year'] }}<br>
                    {{ 'Paper ' . $paper['paper_number']  }}<br>
                    {{ 'Question ' . $paper['question_number'] }}
                    @endif
                </span>

                <span>
                    {{ $paper['topic'] }}
                </span>

                <span>
                    {{ $paper['notes'] }}
                </span>

                <span class="photoswipe-image">
                    @if ($markSchemeExists)
                        <a
                            href="{{ $markSchemePath }}"
                            data-pswp-width="{{ getImageDimensions($markSchemePath)['width'] }}"
                            data-pswp-height="{{ getImageDimensions($markSchemePath)['height'] }}"
                        >
                        show
                        </a>
                    @endif
                </span>

                @if ($isLoggedIn)
                <span>
                <a href="/edit-resource/{{ $paper->id }}">Edit</a>
                </span>

                <form action="/delete-resource/{{ $paper->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
                </form>
                @endif
            @endforeach
        </section>
    </div>
    <div class="pagination">
        {{ $papers->links(null, ['results_count' => $results_count]) }}
    </div>
</div>
@endsection
