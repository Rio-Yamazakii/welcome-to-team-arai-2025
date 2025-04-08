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
            $table->id(); // ID（自動インクリメント）
            $table->string('name'); // 名前
            $table->string('email'); // メールアドレス
            $table->integer('age'); // 年齢
            $table->unsignedBigInteger('tech_ID'); // 技術ID（外部キー制約なし）
            $table->timestamps(); // 作成日・更新日
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
