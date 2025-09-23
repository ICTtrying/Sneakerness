<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
{
    \App\Models\Evenement::factory()->count(5)->create();
}
    
}
