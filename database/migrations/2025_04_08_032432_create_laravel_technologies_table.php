<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelTechnologiesTable extends Migration
{
    public function up()
    {
        Schema::create('laravel_technologies', function (Blueprint $table) {
            $table->id();
            $table->string('tech_language');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('laravel_technologies');
    }
}