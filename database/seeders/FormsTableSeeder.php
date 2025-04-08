<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laravel_forms')->insert([
            ['名前' => 'テスト1', 'メールアドレス' => 'test1@com', '年齢' => 10, '技術ID' => 1],
            ['名前' => 'テスト2', 'メールアドレス' => 'test2@com', '年齢' => 20, '技術ID' => 3],
            ['名前' => 'テスト3', 'メールアドレス' => 'test3@com', '年齢' => 30, '技術ID' => 2],
            ['名前' => 'テスト4', 'メールアドレス' => 'test4@com', '年齢' => 40, '技術ID' => 5],
            ['名前' => 'テスト5', 'メールアドレス' => 'test5@com', '年齢' => 50, '技術ID' => 4],
        ]);
    }
}
