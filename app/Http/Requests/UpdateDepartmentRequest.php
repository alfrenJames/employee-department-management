<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateDepartmentRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check();
    }

    public function rules()
    {
        $departmentId = $this->route('department')?->id;

        return [
            'name' => 'required|string|max:255',
            'code' => [
                'required','string','max:50',
                Rule::unique('departments','code')->ignore($departmentId),
            ],
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ];
    }
}
