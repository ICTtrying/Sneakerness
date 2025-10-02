<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Verkoper>
 */
class VerkoperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Naam' => $this->faker->company,
            'SpecialeStatus' => $this->faker->boolean,
            'StandType' => $this->faker->randomElement(['A', 'AA', 'AA+']),
            'Dagen' => $this->faker->randomElement(['1', '2', '3', '4']),
            'Logo' => $this->faker->optional()->imageUrl(200, 200, 'business', true, 'logo'),
        ];
    }
}