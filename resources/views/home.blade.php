@extends('base')

@section('content')
<h1 class="home">{{ $pageInfo['title'] }}</h1>
<br><br>{{ $pageInfo['about_title'] }}
<br><br>{{ $pageInfo['about_copy'] }}
<br><br>{{ $pageInfo['aim_title'] }}
<br><br>{{ $pageInfo['aim_copy'] }}
<br><br>{{ $pageInfo['background_title'] }}
<br><br>{{ $pageInfo['background_copy'] }}
<br><br>{{ $pageInfo['approach_title'] }}
<br><br>{{ $pageInfo['approach_copy'] }}
@endsection