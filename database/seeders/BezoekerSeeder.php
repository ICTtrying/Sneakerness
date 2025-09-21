<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BezoekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Bezoeker')->insert([
            [
                'Naam' => 'Jan Jansen',
                'Email' => 'jan.jansen@example.com',
                'Isactief' => true,
                'Opmerking' => 'Eerste bezoeker',
                'Datumaangemaakt' => now(),
                'Datumgewijzigd' => now(),
            ],
            [
                'Naam' => 'Piet Pietersen',
                'Email' => 'piet.pietersen@example.com',
                'Isactief' => false,
                'Opmerking' => null,
                'Datumaangemaakt' => now(),
                'Datumgewijzigd' => now(),
            ],
        ]);
    }
}
