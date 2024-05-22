<?php

namespace Database\Factories\Api\V1;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Api\V1\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "username" => fake()->firstName()." ".fake()->lastName(),
            "email" => fake()->unique()->safeEmail(),
            "password" => "Person123@",
            "country" => fake()->randomElement(["Nigeria", "China", "Isreal", "Ghana", "Canada"]),
        ];
    }
}
