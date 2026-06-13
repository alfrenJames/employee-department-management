<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        $employeeId = $this->route('employee')?->id;

        return [
            'employee_number' => ['required','string','max:50', Rule::unique('employees','employee_number')->ignore($employeeId)],
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => ['required','email', Rule::unique('employees','email')->ignore($employeeId)],
            'phone_number' => 'nullable|string|max:50',
            'address' => 'nullable|string',
            'date_of_birth' => 'nullable|date',
            'gender' => 'nullable|in:male,female,other',
            'hire_date' => 'required|date',
            'department_id' => 'required|exists:departments,id',
            'employment_status' => 'nullable|string|max:50',
            'profile_photo' => 'nullable|image|max:2048',
        ];
    }
}
