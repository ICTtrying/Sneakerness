<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrijsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Prijs')->insert([
            [
                'Datum' => '2024-06-01',
                'Tijdslot' => '10:00:00',
                'Tarief' => 25.00,
                'Isactief' => true,
                'Opmerking' => 'Ochtendtarief',
                'Datumaangemaakt' => now(),
                'Datumgewijzigd' => null,
            ],
            [
                'Datum' => '2024-06-01',
                'Tijdslot' => '14:00:00',
                'Tarief' => 30.00,
                'Isactief' => true,
                'Opmerking' => 'Middagtarief',
                'Datumaangemaakt' => now(),
                'Datumgewijzigd' => null,
            ],
            [
                'Datum' => '2024-06-01',
                'Tijdslot' => '18:00:00',
                'Tarief' => 35.00,
                'Isactief' => false,
                'Opmerking' => 'Avondtarief (niet actief)',
                'Datumaangemaakt' => now(),
                'Datumgewijzigd' => now(),
            ],
        ]);
    }
}
