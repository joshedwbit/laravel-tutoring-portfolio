@extends('base')

@section('title', 'User login - Joshua Edwards Tutoring')
@section('meta_description', 'Login to access hidden areas of the site.')
@section('robots_meta', 'noindex')

@section('content')
<h1 class="page-title">{{ auth()->check() ? 'Login' : 'Register / Login' }}</h1>

@auth
<p>You are already logged in!</p>
<form method="POST" action='/logout'>
    @csrf
    <button type="submit" class="submit">
        Logout
    </button>
</form>
@else
<form method="POST" action="/register">
    @csrf

    <div class="field">
      <label for="name">Name</label>

      <div class="field__value">
        <input type="text" placeholder="name" name="name" id="name"/>
      </div>

      @error('name')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="email">Email</label>

      <div class="field__value">
        <input type="text" placeholder="email" name="email" id="email"/>
      </div>

      @error('email')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="password">Password</label>

      <div class="field__value">
        <input type="password" placeholder="password" name="password" id="password"/>
      </div>

      @error('password')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="passcode">Passcode</label>

      <div class="field__value">
        <input type="text" name="passcode" placeholder="passcode" id="passcode"/>
      </div>

      @error('passcode')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div>
      <button class="submit" type="submit">
        Register
      </button>
    </div>
</form>

<div class="page-break"></div>

<form method="POST" action="/user-login">
    @csrf

    <div class="field">
      <label for="login-email">Email</label>

      <div class="field__value">
        <input type="text" placeholder="email" name="login-email" id="login-email"/>
      </div>

      @error('login-email')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="login-password">Password</label>

      <div class="field__value">
        <input type="password" placeholder="password" name="login-password" id="login-password"/>
      </div>

      @error('login-password')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div class="field">
      <label for="login-passcode">Passcode</label>

      <div class="field__value">
        <input type="text" name="login-passcode" placeholder="passcode" id="login-passcode"/>
      </div>

      @error('login-passcode')
      <p class="error">{{$message}}</p>
      @enderror
    </div>

    <div>
      <button class="submit" type="submit">
        Login
      </button>
    </div>
  </form>
@endauth
@endsection