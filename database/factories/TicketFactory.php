<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_name' => $this->faker->sentence(3),
            'event_date' => $this->faker->date(),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'seat_number' => $this->faker->optional()->bothify('Seat-###'),
            'buyer_name' => $this->faker->name(),
            'buyer_email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
