@extends('layouts.app')

@section('content')
  <h1>Edit Employee</h1>

  @if($errors->any())
    <div class="alert alert-danger">
      <ul class="mb-0">
        @foreach($errors->all() as $err)
          <li>{{ $err }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form method="POST" action="{{ route('employees.update', $employee) }}" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Employee Number</label>
          <input type="text" name="employee_number" value="{{ old('employee_number', $employee->employee_number) }}" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">First Name</label>
          <input type="text" name="first_name" value="{{ old('first_name', $employee->first_name) }}" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Middle Name</label>
          <input type="text" name="middle_name" value="{{ old('middle_name', $employee->middle_name) }}" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Last Name</label>
          <input type="text" name="last_name" value="{{ old('last_name', $employee->last_name) }}" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" value="{{ old('email', $employee->email) }}" class="form-control" required>
        </div>
      </div>

      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" name="phone_number" value="{{ old('phone_number', $employee->phone_number) }}" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Address</label>
          <textarea name="address" class="form-control">{{ old('address', $employee->address) }}</textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Date of Birth</label>
          <input type="date" name="date_of_birth" value="{{ old('date_of_birth', $employee->date_of_birth) }}" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Hire Date</label>
          <input type="date" name="hire_date" value="{{ old('hire_date', $employee->hire_date) }}" class="form-control" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Department</label>
          <select name="department_id" class="form-select" required>
            <option value="">-- choose --</option>
            @foreach($departments as $d)
              <option value="{{ $d->id }}" {{ old('department_id', $employee->department_id) == $d->id ? 'selected' : '' }}>{{ $d->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label class="form-label">Profile Photo</label>
          @if($employee->profile_photo)
            <div class="mb-2"><img src="{{ asset('storage/'.$employee->profile_photo) }}" alt="photo" style="height:80px"></div>
          @endif
          <input type="file" name="profile_photo" class="form-control">
        </div>
      </div>
    </div>

    <button class="btn btn-primary">Update</button>
  </form>
@endsection
