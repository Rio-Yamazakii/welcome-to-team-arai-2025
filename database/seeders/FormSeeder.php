<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('forms')->insert([
            'id' => 1,
            'name' => 'テスト1',
            'email' => 'test1@com',
            'email_verified_at' => null,
            'Age' => 10,
            'origin' => '東京',
            'technologies_id' => 1,
        ]);

        DB::table('forms')->insert([
            'id' => 2,
            'name' => 'テスト2',
            'email' => 'test2@com',
            'email_verified_at' => null,
            'Age' => 20,
            'origin' => '神奈川',
            'technologies_id' => 3,
        ]);

        DB::table('forms')->insert([
            'id' => 3,
            'name' => 'テスト3',
            'email' => 'test3@com',
            'email_verified_at' => null,
            'Age' => 30,
            'origin' => '埼玉',
            'technologies_id' => 2,
        ]);

        DB::table('forms')->insert([
            'id' => 4,
            'name' => 'テスト4',
            'email' => 'test4@com',
            'email_verified_at' => null,
            'Age' => 40,
            'origin' => '千葉',
            'technologies_id' => 5,
        ]);

        DB::table('forms')->insert([
            'id' => 5,
            'name' => 'テスト5',
            'email' => 'test5@com',
            'email_verified_at' => null,
            'Age' => 50,
            'origin' => '茨城',
            'technologies_id' => 4,
        ]);
    }
}
