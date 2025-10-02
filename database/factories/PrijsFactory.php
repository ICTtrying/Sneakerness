<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prijs>
 */
class PrijsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Datum' => $this->faker->date(),
            'Tijdslot' => $this->faker->time(),
            'Tarief' => $this->faker->randomFloat(2, 5, 30),
            'Isactief' => $this->faker->boolean(),
            'Opmerking' => $this->faker->optional()->text(),
            'Datumaangemaakt' => $this->faker->optional()->dateTime(),
            'Datumgewijzigd' => $this->faker->optional()->dateTime(),
        ];
    }
}
