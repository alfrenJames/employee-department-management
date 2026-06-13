@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between align-items-start mb-3">
    <div>
      <h1>{{ $employee->first_name }} {{ $employee->last_name }}</h1>
      <p><strong>Employee #:</strong> {{ $employee->employee_number }}</p>
      <p><strong>Email:</strong> {{ $employee->email }}</p>
      <p><strong>Phone:</strong> {{ $employee->phone_number }}</p>
      <p><strong>Department:</strong> <a href="{{ route('departments.show', $employee->department) }}">{{ $employee->department?->name }}</a></p>
    </div>
    <div>
      @if($employee->profile_photo)
        <img src="{{ asset('storage/'.$employee->profile_photo) }}" alt="photo" style="height:120px">
      @endif
    </div>
  </div>

  <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>
@endsection
