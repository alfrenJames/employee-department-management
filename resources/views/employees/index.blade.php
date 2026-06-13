@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3 mt-5">
    <h1>Employees</h1>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">New Employee</a>
</div>

@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $emp)
            <tr>
                <td>{{ $emp->employee_number }}</td>
                <td><a href="{{ route('employees.show', $emp) }}">{{ $emp->first_name }} {{ $emp->last_name }}</a></td>
                <td>{{ $emp->email }}</td>
                <td>{{ $emp->department?->name }}</td>
                <td class="text-end">
                    <a href="{{ route('employees.edit', $emp) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <form action="{{ route('employees.destroy', $emp) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('Delete employee?');">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $employees->links('pagination::bootstrap-5') }}

@endsection