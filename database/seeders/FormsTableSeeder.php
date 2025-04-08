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
                'form_id' => 1,
                'name' => 'テスト1',
                'mail_address' => 'test1@com',
                'age' => 10,
                'skill_id' => 1,
            ],
            [
                'form_id' => 2,
                'name' => 'テスト2',
                'mail_address' => 'test2@com',
                'age' => 20,
                'skill_id' => 3,
            ],
            [
                'form_id' => 3,
                'name' => 'テスト3',
                'mail_address' => 'test3@com',
                'age' => 30,
                'skill_id' => 2,
            ],
            [
                'form_id' => 4,
                'name' => 'テスト4',
                'mail_address' => 'test4@com',
                'age' => 40,
                'skill_id' => 5,
            ],
            [
                'form_id' => 5,
                'name' => 'テスト5',
                'mail_address' => 'test5@com',
                'age' => 50,
                'skill_id' => 4,
            ],
        ]);
    }
}
