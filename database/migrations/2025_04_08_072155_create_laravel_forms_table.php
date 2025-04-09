<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('laravel_forms', function (Blueprint $table) {
            $table->id('form_id'); // フォームID
            $table->string('name');
            $table->string('email');
            $table->integer('age')->nullable();
            $table->unsignedBigInteger('tech_id')->nullable();
            $table->string('form')->nullable();
            $table->timestamps();
    
            // 文字コード設定
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laravel_forms');
    }
};
