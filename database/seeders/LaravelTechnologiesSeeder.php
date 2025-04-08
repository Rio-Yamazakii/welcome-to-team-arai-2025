<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaravelTechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laravel_technologies')->insert([
            ['技術ID' => 1, '得意な言語' => 'HTML'],
            ['技術ID' => 2, '得意な言語' => 'PHP'],
            ['技術ID' => 3, '得意な言語' => 'CSS'],
            ['技術ID' => 4, '得意な言語' => 'JAVA'],
            ['技術ID' => 5, '得意な言語' => 'Ruby'],
        ]);
    }
}
