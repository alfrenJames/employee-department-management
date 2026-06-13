@extends('layouts.app')

@section('content')
  <h1>{{ $department->name }}</h1>
  <p><strong>Code:</strong> {{ $department->code }}</p>
  <p><strong>Status:</strong> {{ ucfirst($department->status) }}</p>
  <p>{{ $department->description }}</p>

  <h3>Employees</h3>
  <ul>
    @foreach($department->employees as $e)
      <li><a href="{{ route('employees.show', $e) }}">{{ $e->first_name }} {{ $e->last_name }}</a></li>
    @endforeach
  </ul>

  <a href="{{ route('departments.index') }}" class="btn btn-secondary">Back</a>
@endsection
