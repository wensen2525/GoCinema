<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cinemas')->insert([
            // jakarta
            [
                'provinsi_id' => 1,
                'cinema_nama' => 'Cinema Cipinang',
                'cinema_alias' => 'c_cipinang'
            ],
            [
                'provinsi_id' => 1,
                'cinema_nama' => 'Cinema Halim',
                'cinema_alias' => 'c_halim'
            ],
            [
                'provinsi_id' => 1,
                'cinema_nama' => 'Cinema Bella',
                'cinema_alias' => 'c_bella'
            ],
           
            // surabaya
            [
                'provinsi_id' => 2,
                'cinema_nama' => 'Cinema Marina',
                'cinema_alias' => 'c_marina'
            ],
            [
                'provinsi_id' => 2,
                'cinema_nama' => 'Cinema Plaza',
                'cinema_alias' => 'c_plaza'
            ],
            [
                'provinsi_id' => 2,
                'cinema_nama' => 'Cinema Ciputra',
                'cinema_alias' => 'c_ciputra'
            ],

            //bali
            [
                'provinsi_id' => 3,
                'cinema_nama' => 'Cinema Beji',
                'cinema_alias' => 'c_beji'
            ],
            [
                'provinsi_id' => 3,
                'cinema_nama' => 'Cinema Kawi',
                'cinema_alias' => 'c_kawi'
            ],
            [
                'provinsi_id' => 3,
                'cinema_nama' => 'Cinema Pura',
                'cinema_alias' => 'c_pura'
            ]
        ]);

    }
}
