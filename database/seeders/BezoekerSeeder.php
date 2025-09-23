<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bezoeker;

class BezoekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bezoeker::factory()->count(10)->create();
    }
}
