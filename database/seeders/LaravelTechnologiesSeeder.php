<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaravelTechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laravel_technologies')->insert([
            ['Tech_id' => 1, 'language' => 'HTML'],
            ['Tech_id' => 2, 'language' => 'PHP'],
            ['Tech_id' => 3, 'language' => 'CSS'],
            ['Tech_id' => 4, 'language' => 'JAVA'],
            ['Tech_id' => 5, 'language' => 'Ruby'],
        ]);
    }
}

