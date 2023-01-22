<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(
            [
                [
                    'movie_nama' => 'A Man Called Otto',
                    'picture' => 'a-man-called-otto.jpg'
                ],
                [
                    'movie_nama' => 'Ant-Man and the Wasp: Quantumania',
                    'picture' => 'antman-3.jpg'
                ],
                [
                    'movie_nama' => 'Puss in Boots: The Last Wish',
                    'picture' => 'pussinboots.jpg'
                ],
                [
                    'movie_nama' => 'Plane',
                    'picture' => 'plane.jpg'
                ],
                [
                    'movie_nama' => 'M3GAN',
                    'picture' => 'm3gan.jpg'
                ]
            ]
        );
    }
}
