<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laravel_technologies')->insert([
            ['得意な言語' => 'HTML'],
            ['得意な言語' => 'PHP'],
            ['得意な言語' => 'CSS'],
            ['得意な言語' => 'JAVA'],
            ['得意な言語' => 'Ruby'],
        ]);
    }
}
