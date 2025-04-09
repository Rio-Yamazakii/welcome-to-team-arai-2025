<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelFormsTable extends Migration
{
    public function up(): void
    {
        Schema::create('laravel_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('age');
            $table->unsignedBigInteger('tech_ID');
            $table->timestamps();  // created_at, updated_atを作成するのに必要らしい
            $table->softDeletes(); // deleted_atを作成するのに必要らしい
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laravel_forms');
    }
}
