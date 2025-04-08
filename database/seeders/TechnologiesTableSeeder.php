<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laravel_technologies')->insert([
            ['tech_ID' => 1, 'well_known_language' => 'HTML'],
            ['tech_ID' => 2, 'well_known_language' => 'PHP'],
            ['tech_ID' => 3, 'well_known_language' => 'CSS'],
            ['tech_ID' => 4, 'well_known_language' => 'JAVA'],
            ['tech_ID' => 5, 'well_known_language' => 'Ruby'],
        ]);
    }
}