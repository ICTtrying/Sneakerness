<?php

namespace Database\Factories;

use App\Models\Bezoeker;
use Illuminate\Database\Eloquent\Factories\Factory;

class BezoekerFactory extends Factory
{
    protected $model = Bezoeker::class;

    public function definition(): array
    {
        return [
            'Naam' => $this->faker->name(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Isactief' => $this->faker->boolean(),
            'Opmerking' => $this->faker->optional()->sentence(),
            'Datumaangemaakt' => now(),
            'Datumgewijzigd' => now(),
        ];
    }
}
