<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinsis')->insert(
            [
                [
                    'provinsi_nama' => 'jakarta',
                ],
                [
                    'provinsi_nama' => 'surabaya',
                ],
                [
                    'provinsi_nama' => 'bali',
                ]
            ]
        );
    }
}
