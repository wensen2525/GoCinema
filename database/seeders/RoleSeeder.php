<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                [
                    'role' => 'User',
                    'is_active' => 1
                ],
                [
                    'role' => 'Admin',
                    'is_active' => 0
                ]
            ]
        );
    }
}
