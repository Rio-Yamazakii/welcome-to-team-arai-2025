<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laravel_forms')->insert([
            [
                'form_ID' => 1,
                'name' => 'テスト1',
                'mail_address' => 'test1@com',
                'age' => 10,
                "from" => "東京",
                'tech_ID' => 1,
            ],
            [
                'form_ID' => 2,
                'name' => 'テスト2',
                'mail_address' => 'test2@com',
                'age' => 20,
                "from" => "神奈川",
                'tech_ID' => 3,
            ],
            [
                'form_ID' => 3,
                'name' => 'テスト3',
                'mail_address' => 'test3@com',
                'age' => 30,
                "from" => "埼玉",
                'tech_ID' => 2,
            ],
            [
                'form_ID' => 4,
                'name' => 'テスト4',
                'mail_address' => 'test4@com',
                'age' => 40,
                "from" => "千葉",
                'tech_ID' => 5,
            ],
            [
                'form_ID' => 5,
                'name' => 'テスト5',
                'mail_address' => 'test5@com',
                'age' => 50,
                "from" => "茨城",
                'tech_ID' => 4,
            ],
        ]);
    }
}