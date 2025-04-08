<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('technologies')->insert([
            'id' => 1,
            'language' => 'HTML',
        ]);

        DB::table('technologies')->insert([
            'id' => 2,
            'language' => 'PHP',
        ]);

        DB::table('technologies')->insert([
            'id' => 3,
            'language' => 'CSS',
        ]);

        DB::table('technologies')->insert([
            'id' => 4,
            'language' => 'JAVA',
        ]);

        DB::table('technologies')->insert([
            'id' => 5,
            'language' => 'Ruby',
        ]);
    }
}
