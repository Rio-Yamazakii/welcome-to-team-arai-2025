<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laravel_technologies')->insert([
            ['tech_language' => 'HTML'],
            ['tech_language' => 'PHP'],
            ['tech_language' => 'CSS'],
            ['tech_language' => 'JAVA'],
            ['tech_language' => 'Ruby'],
        ]);
    }
}
