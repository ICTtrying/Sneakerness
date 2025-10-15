<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            EvenementSeeder::class,
            PrijsSeeder::class,
            BezoekerSeeder::class,
            TicketSeeder::class,
            VerkoperSeeder::class,
            StandSeeder::class,
        ]);

        User::factory(3)->create();
    }
}
