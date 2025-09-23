<?php

namespace Database\Factories;

use App\Models\StandModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class StandModelFactory extends Factory
{
    protected $model = StandModel::class;

    public function definition()
    {
    return [
        'StandType' => $this->faker->randomElement(['A', 'AA', 'AA+']),
        'Prijs' => $this->faker->randomFloat(2, 100, 1000),
        'VerhuurdStatus' => $this->faker->boolean(),
        'Isactief' => true,
        'VerkoperId' => $this->faker->numberBetween(1, 10)
    ];

    }
}
