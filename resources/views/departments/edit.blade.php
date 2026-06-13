@extends('layouts.app')

@section('content')
  <h1>Edit Department</h1>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach($errors->all() as $err)
          <li>{{ $err }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('departments.update', $department) }}">
    @csrf @method('PUT')
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" value="{{ old('name', $department->name) }}" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Code</label>
      <input type="text" name="code" value="{{ old('code', $department->code) }}" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control">{{ old('description', $department->description) }}</textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Status</label>
      <select name="status" class="form-select">
        <option value="active" {{ $department->status === 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ $department->status === 'inactive' ? 'selected' : '' }}>Inactive</option>
      </select>
    </div>
    <button class="btn btn-primary">Update</button>
  </form>
@endsection
