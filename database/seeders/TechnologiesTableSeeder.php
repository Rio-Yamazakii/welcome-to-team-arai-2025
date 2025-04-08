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
            ['skill_id' => 1, 'well_language' => 'HTML'],
            ['skill_id' => 2, 'well_language' => 'PHP'],
            ['skill_id' => 3, 'well_language' => 'CSS'],
            ['skill_id' => 4, 'well_language' => 'JAVA'],
            ['skill_id' => 5, 'well_language' => 'Ruby'],
        ]);
    }
}
