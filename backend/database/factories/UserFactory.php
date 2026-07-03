<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'role' => 'member',
            'status' => 'active',
            'password' => bcrypt('password'),
        ];
    }

    public function admin(): static
    {
        return $this->state(fn(array $attributes) => [
            'role' => 'admin',
        ]);
    }
}
