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
        DB::table('Evenement')->insert([
            [
            'Naam' => 'Sneakerness Amsterdam',
            'Datum' => '2025-10-12',
            'Locatie' => 'RAI Amsterdam',
            'AantalTicketsPerTijdslot' => 100,
            'BeschikbareStands' => 25,
            'Isactief' => true,
            'Opmerking' => 'Annual sneaker fair with international vendors.',
            'Datumaangemaakt' => now(),
            'Datumgewijzigd' => null,
            ],
            [
            'Naam' => 'Sneaker Swap Utrecht',
            'Datum' => '2025-06-20',
            'Locatie' => 'Jaarbeurs Utrecht',
            'AantalTicketsPerTijdslot' => 50,
            'BeschikbareStands' => 10,
            'Isactief' => true,
            'Opmerking' => 'Community swap meet for collectors.',
            'Datumaangemaakt' => now()->subDays(30),
            'Datumgewijzigd' => null,
            ],
            [
            'Naam' => 'Sneakerness Pop-up Antwerp',
            'Datum' => '2025-09-05',
            'Locatie' => 'Antwerp Expo',
            'AantalTicketsPerTijdslot' => 80,
            'BeschikbareStands' => 15,
            'Isactief' => false,
            'Opmerking' => 'One-day pop-up event (inactive).',
            'Datumaangemaakt' => now()->subMonths(2),
            'Datumgewijzigd' => now()->subDays(10),
            ],
        ]);
    }
}
