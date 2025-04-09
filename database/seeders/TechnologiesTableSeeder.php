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
            ['id' => 1, 'well_language' => 'HTML'],
            ['id' => 2, 'well_language' => 'PHP'],
            ['id' => 3, 'well_language' => 'CSS'],
            ['id' => 4, 'well_language' => 'JAVA'],
            ['id' => 5, 'well_language' => 'Ruby'],
        ]);
    }
}
