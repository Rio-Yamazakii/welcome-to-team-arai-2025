<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaravelFormsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laravel_forms')->insert([
            [
                'form_id' => 1, 
                'name' => 'テスト1', 
                'email' => 'test1@com', 
                'age' => 10, 
                'technology_id' => 1, 
                'birthplace' => '東京',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'form_id' => 2, 
                'name' => 'テスト2', 
                'email' => 'test2@com', 
                'age' => 20, 
                'technology_id' => 3, 
                'birthplace' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'form_id' => 3, 
                'name' => 'テスト3', 
                'email' => 'test3@com', 
                'age' => 30, 
                'technology_id' => 2, 
                'birthplace' => '神奈川',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'form_id' => 4, 
                'name' => 'テスト4', 
                'email' => 'test4@com', 
                'age' => 40, 
                'technology_id' => 5, 
                'birthplace' => '埼玉',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'form_id' => 5, 
                'name' => 'テスト5', 
                'email' => 'test5@com', 
                'age' => 50, 
                'technology_id' => 4, 
                'birthplace' => '千葉',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}