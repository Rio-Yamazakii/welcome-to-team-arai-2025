<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laravel_forms', function (Blueprint $table) {
            $table->id('form_id');
            $table->string('name');
            $table->string('email');
            $table->integer('age')->nullable();
            $table->integer('technology_id')->nullable();
            $table->string('birthplace')->nullable();
            $table->timestamps();
            
            // 文字コード設定
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('laravel_forms');
    }
};