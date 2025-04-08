<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaravelFormsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laravel_forms', function (Blueprint $table) {
            $table->id('フォームID');
            $table->string('名前');
            $table->string('メールアドレス');
            $table->integer('年齢');
            $table->unsignedBigInteger('技術ID'); // 外部キー制約なし
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laravel_forms');
    }
}
