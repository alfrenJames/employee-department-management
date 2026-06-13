@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h2>Dashboard</h2>
      <p>Welcome, {{ auth()->user()->name }} ({{ auth()->user()->email }})</p>
      <p>This is a protected area; you can extend it to manage employees and departments.</p>
    </div>
  </div>
@endsection
