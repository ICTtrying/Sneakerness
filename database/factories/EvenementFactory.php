<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EvenementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'Naam' => $this->faker->sentence(3),
            'Datum' => $this->faker->date(),
            'Locatie' => $this->faker->city(),
            'AantalTicketsPerTijdslot' => $this->faker->numberBetween(0, 500),
            'BeschikbareStands' => $this->faker->numberBetween(0, 100),
            'Isactief' => $this->faker->boolean(),
            'Opmerking' => $this->faker->optional()->paragraph(),
            'Datumaangemaakt' => $this->faker->optional()->dateTime(),
            'Datumgewijzigd' => $this->faker->optional()->dateTime(),
        ];
    }
}
