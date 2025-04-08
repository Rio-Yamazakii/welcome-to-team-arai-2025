<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laravel_forms')->insert([
            ['name' => 'テスト1', 'email' => 'test1@com', 'age' => 10, 'tech_ID' => 1],
            ['name' => 'テスト2', 'email' => 'test2@com', 'age' => 20, 'tech_ID' => 3],
            ['name' => 'テスト3', 'email' => 'test3@com', 'age' => 30, 'tech_ID' => 2],
            ['name' => 'テスト4', 'email' => 'test4@com', 'age' => 40, 'tech_ID' => 5],
            ['name' => 'テスト5', 'email' => 'test5@com', 'age' => 50, 'tech_ID' => 4],
        ]);
    }
}
