<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('laravel_forms', function (Blueprint $table) {
            $table->id('フォームID');
            $table->string('名前');
            $table->string('メールアドレス');
            $table->integer('年齢')->nullable();
            $table->integer('技術ID')->nullable();
            $table->string('出身')->nullable();
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