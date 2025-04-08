<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaravelTechnologiesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laravel_technologies')->insert([
            ['technology_id' => 1, 'language_name' => 'HTML', 'created_at' => now(), 'updated_at' => now()],
            ['technology_id' => 2, 'language_name' => 'PHP', 'created_at' => now(), 'updated_at' => now()],
            ['technology_id' => 3, 'language_name' => 'CSS', 'created_at' => now(), 'updated_at' => now()],
            ['technology_id' => 4, 'language_name' => 'JAVA', 'created_at' => now(), 'updated_at' => now()],
            ['technology_id' => 5, 'language_name' => 'Ruby', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}