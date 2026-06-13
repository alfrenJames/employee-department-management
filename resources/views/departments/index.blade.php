@extends('layouts.app')

@section('content')
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Departments</h1>
    <a href="{{ route('departments.create') }}" class="btn btn-primary">New Department</a>
  </div>

  @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif

  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th>Code</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
      @foreach($departments as $d)
        <tr>
          <td><a href="{{ route('departments.show', $d) }}">{{ $d->name }}</a></td>
          <td>{{ $d->code }}</td>
          <td>{{ ucfirst($d->status) }}</td>
          <td class="text-end">
            <a href="{{ route('departments.edit', $d) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
            <form action="{{ route('departments.destroy', $d) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete department?');">
              @csrf @method('DELETE')
              <button class="btn btn-sm btn-danger">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>

  {{ $departments->links('pagination::bootstrap-5') }}

@endsection
