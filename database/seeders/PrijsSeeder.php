<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrijsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Prijs::factory()->count(10)->create();
    }
}
