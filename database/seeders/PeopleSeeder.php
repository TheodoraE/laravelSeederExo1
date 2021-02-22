<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert(
            [
                [
                    'name' => 'Theodora',
                    'age' => 23,
                    'email' => "theo@gmail.com",
                    'phone' => 022002020
                ],
                [
                    'name' => 'Violette',
                    'age' => 26,
                    'email' => "violette@gmail.com",
                    'phone' => 033003030
                ],
                [
                    'name' => 'Youssef',
                    'age' => 27,
                    'email' => "youss@gmail.com",
                    'phone' => 077007070
                ],
                [
                    'name' => 'Paul',
                    'age' => 24,
                    'email' => "paul@gmail.com",
                    'phone' => 066006060
                ]
            ]
        );
    }
}
