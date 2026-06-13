<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    public function definition()
    {
        $first = $this->faker->firstName();
        $last = $this->faker->lastName();
        $dept = Department::inRandomOrder()->first()?->id ?? null;

        return [
            'employee_number' => 'EMP'. $this->faker->unique()->numerify('#####'),
            'first_name' => $first,
            'middle_name' => $this->faker->optional()->firstName(),
            'last_name' => $last,
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $this->faker->optional()->phoneNumber(),
            'address' => $this->faker->optional()->address(),
            'date_of_birth' => $this->faker->optional()->date(),
            'gender' => $this->faker->randomElement(['male','female','other']),
            'hire_date' => $this->faker->dateTimeBetween('-10 years','now')->format('Y-m-d'),
            'department_id' => $dept,
            'employment_status' => $this->faker->randomElement(['employed','on_leave','terminated']),
            'profile_photo' => null,
        ];
    }
}
