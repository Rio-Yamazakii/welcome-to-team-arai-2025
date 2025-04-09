<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LaravelFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laravel_forms')->insert([
            ['formID' => 1, 'name' => 'テスト1', 'mailaddres' => 'test1@com', 'age' => 10, 'techID' => 1, 'from' => '東京'],
            ['formID' => 2, 'name' => 'テスト2', 'mailaddres' => 'test2@com', 'age' => 20, 'techID' => 3, 'from' => '神奈川'],
            ['formID' => 3, 'name' => 'テスト3', 'mailaddres' => 'test3@com', 'age' => 30, 'techID' => 2, 'from' => '埼玉'],
            ['formID' => 4, 'name' => 'テスト4', 'mailaddres' => 'test4@com', 'age' => 40, 'techID' => 5, 'from' => '千葉'],
            ['formID' => 5, 'name' => 'テスト5', 'mailaddres' => 'test5@com', 'age' => 50, 'techID' => 4, 'from' => null],
        ]);
    }
}
