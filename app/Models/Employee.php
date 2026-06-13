<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_number',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone_number',
        'address',
        'date_of_birth',
        'gender',
        'hire_date',
        'department_id',
        'employment_status',
        'profile_photo',
    ];

    /**
     * Employee belongs to a Department
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
