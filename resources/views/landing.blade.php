@extends('layouts.app')

@section('content')
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1 class="display-5">Employee Department Management</h1>
      <p class="lead">Simple demo to manage employees and departments. Sign in to manage records.</p>
      <p>
        @guest
          <a href="{{ route('register') }}" class="btn btn-primary me-2">Get Started</a>
          <a href="{{ route('login') }}" class="btn btn-outline-secondary">Log in</a>
        @else
          <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to Dashboard</a>
        @endguest
      </p>
    </div>
    <div class="col-md-6 text-center">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="logo" style="max-width:240px; opacity:0.9">
    </div>
  </div>
@endsection
