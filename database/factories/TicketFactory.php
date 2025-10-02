<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    public function definition(): array
    {
        return [
            'Bezoeker_id'      => \App\Models\Bezoeker::factory(),
            'Evenement_id'     => \App\Models\Evenement::factory(),
            'Prijs_id'         => \App\Models\Prijs::factory(),
            'AantalTickets'   => $this->faker->numberBetween(1, 10),
            'Datum'           => $this->faker->optional()->dateTime(),
            'Isactief'        => '1',
            'Opmerking'       => $this->faker->optional()->text(100),
            'Datumaangemaakt' => $this->faker->optional()->dateTime(),
            'Datumgewijzigd'  => $this->faker->optional()->dateTime(),
        ];
    }
}
