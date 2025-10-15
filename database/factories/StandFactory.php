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
            'StandType' => $standType = $this->faker->randomElement(['A', 'AA', 'AA+']),
            'Dagen' => $dagen = $this->faker->randomFloat(0, 1, 3),
            'Prijs' => match ($standType) {
                'A' => 300 * $dagen,
                'AA' => 500 * $dagen,
                'AA+' => 700 * $dagen,
                default => 0,
            },
            'VerhuurdStatus' => empty($stand->verkoper->Naam) ? 0 : ($this->faker->boolean() ? 1 : 0),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}