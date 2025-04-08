<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laravel_technologies', function (Blueprint $table) {
            $table->id('technology_id');
            $table->string('language_name');
            $table->timestamps();
            
            // 文字コード設定
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
        });
    }

    public function down()
    {
        Schema::dropIfExists('laravel_technologies');
    }
};
