<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Verkoper;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stand>
 */
class StandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'verkoper_id' => Verkoper::factory(),
            'StandType' => $this->faker->randomElement(['A', 'AA', 'AA+']),
            'Dagen' => fake()->randomNumber(5),
            'Prijs' => $this->faker->randomFloat(2, 0, 1000),
            'VerhuurdStatus' => $this->faker->boolean() ? 1 : 0,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}