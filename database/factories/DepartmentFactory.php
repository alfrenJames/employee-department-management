<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DepartmentFactory extends Factory
{
    public function definition()
    {
        $name = $this->faker->unique()->company();
        return [
            'name' => $name,
            'code' => Str::upper(Str::slug(substr($name,0,10))),
            'description' => $this->faker->optional()->sentence(),
            'status' => $this->faker->randomElement(['active','inactive']),
        ];
    }
}
