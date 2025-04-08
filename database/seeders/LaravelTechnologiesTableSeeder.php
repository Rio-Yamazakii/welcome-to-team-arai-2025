<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaravelTechnologiesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laravel_technologies')->insert([
            ['技術ID' => 1, '得意な言語' => 'HTML', 'created_at' => now(), 'updated_at' => now()],
            ['技術ID' => 2, '得意な言語' => 'PHP', 'created_at' => now(), 'updated_at' => now()],
            ['技術ID' => 3, '得意な言語' => 'CSS', 'created_at' => now(), 'updated_at' => now()],
            ['技術ID' => 4, '得意な言語' => 'JAVA', 'created_at' => now(), 'updated_at' => now()],
            ['技術ID' => 5, '得意な言語' => 'Ruby', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
