<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure departments exist
        if (Department::count() === 0) {
            Department::factory()->count(5)->create();
        }

        Employee::factory()->count(20)->create();
    }
}
