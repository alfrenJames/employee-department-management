@extends('layouts.app')

@section('content')
<div class="text-center py-5">
    <h1 class="display-1">Page not Found!</h1>
    <p class="lead">Sorry, the page you are looking for could not be found.</p>
    <p>
        <a href="{{ url('/') }}" class="btn btn-primary me-2">Go Home</a>
        @auth
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
        @endauth
    </p>
</div>
@endsection