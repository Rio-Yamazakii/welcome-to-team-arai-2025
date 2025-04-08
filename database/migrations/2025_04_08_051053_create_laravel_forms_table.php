<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laravel_forms', function (Blueprint $table) {
            $table->id('form_id');
            $table->string('name');
            $table->string('mail_address');
            $table->integer('age');
            $table->unsignedBigInteger('skill_id');
            $table->foreign('skill_id')
                  ->references('id')
                  ->on('laravel_technologies') 
                  ->onDelete('cascade');
            $table->timestamps();
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
