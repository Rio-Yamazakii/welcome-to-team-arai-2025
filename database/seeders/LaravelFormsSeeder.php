<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaravelFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('laravel_forms')->insert([
          ['form_id'=> 1,'name' => 'テスト1', 'email' => 'test1@com', 'age' => 10, 'tech_id' => 1],
          ['form_id'=> 2,'name' => 'テスト2', 'email' => 'test2@com', 'age' => 20, 'tech_id' => 3],
          ['form_id'=> 3,'name' => 'テスト3', 'email' => 'test3@com', 'age' => 30, 'tech_id' => 2],
          ['form_id'=> 4,'name' => 'テスト4', 'email' => 'test4@com', 'age' => 40, 'tech_id' => 5],
          ['form_id'=> 5,'name' => 'テスト5', 'email' => 'test5@com', 'age' => 50, 'tech_id' => 4],
       ]);   
    }
}
