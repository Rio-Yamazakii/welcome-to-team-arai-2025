<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaravelFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laravel_forms')->insert([
            ['フォームID' => 1, '名前' => 'テスト1', 'メールアドレス' => 'test1@com', '年齢' => 10, '技術ID' => 1, '出身' => '東京'],
            ['フォームID' => 2, '名前' => 'テスト2', 'メールアドレス' => 'test2@com', '年齢' => 20, '技術ID' => 3, '出身' => '神奈川'],
            ['フォームID' => 3, '名前' => 'テスト3', 'メールアドレス' => 'test3@com', '年齢' => 30, '技術ID' => 2, '出身' => '埼玉'],
            ['フォームID' => 4, '名前' => 'テスト4', 'メールアドレス' => 'test4@com', '年齢' => 40, '技術ID' => 5, '出身' => '千葉'],
            ['フォームID' => 5, '名前' => 'テスト5', 'メールアドレス' => 'test5@com', '年齢' => 50, '技術ID' => 4, '出身' => null],
        ]);
    }
}
