<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Data;
use App\Models\Participant;
use Illuminate\Database\Seeder;
use Database\Seeders\FilmSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\CinemaSeeder;
use Database\Seeders\ProvinsiSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Participant::factory()
            ->count(50)
            ->create();
        $this->call([
            // ProvinsiSeeder::class,
            // MovieSeeder::class,
            // CinemaSeeder::class,
            // FilmSeeder::class,
            // RoleSeeder::class
        ]);
    }
}
