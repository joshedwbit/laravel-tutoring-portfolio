@extends('base')

@section('content')
<h1 class="home">Contact page</h1>
<br><br>
{{ $pageInfo['title'] }}
<br><br>
visit my <a href="{{ config('contact.linkedin') }}" target="_blank">Linkedin</a>
<br><br>
Email {{ config('contact.email') }}<br><a href="mailto: {{ config('contact.email') }}">Send an email now.</a>
<br><br>
Mobile {{ config('contact.mobile') }}<br>Drop a message or <a href="tel: {{ config('contact.mobile') }}">call now.</a>
@endsection