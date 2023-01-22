<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            // jakarta
            [
                'movie_id' => 1,
                'cinema_id' => 1
            ],
            [
                'movie_id' => 1,
                'cinema_id' => 2
            ],
            [
                'movie_id' => 1,
                'cinema_id' => 3
            ],
            [
                'movie_id' => 3,
                'cinema_id' => 1
            ],
            [
                'movie_id' => 4,
                'cinema_id' => 2
            ],
            [
                'movie_id' => 3,
                'cinema_id' => 3
            ],

            // surabaya
            [
                'movie_id' => 1,
                'cinema_id' => 4
            ],
            [
                'movie_id' => 3,
                'cinema_id' => 5
            ],
            [
                'movie_id' => 4,
                'cinema_id' => 6
            ],
            [
                'movie_id' => 4,
                'cinema_id' => 4
            ],
            [
                'movie_id' => 4,
                'cinema_id' => 5
            ],

            //bali
            [
                'movie_id' => 3,
                'cinema_id' => 7
            ],
            [
                'movie_id' => 3,
                'cinema_id' => 8
            ],
            [
                'movie_id' => 5,
                'cinema_id' => 9
            ],
        ]);
    }
}
