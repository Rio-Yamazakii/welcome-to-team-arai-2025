<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class LaravelTechnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laravel_technologies')->insert([
            ['techID' => 1, 'lang' => 'HTML'],
            ['techID' => 2, 'lang' => 'PHP'],
            ['techID' => 3, 'lang' => 'CSS'],
            ['techID' => 4, 'lang' => 'JAVA'],
            ['techID' => 5, 'lang' => 'Ruby'],
        ]);
    }
}
