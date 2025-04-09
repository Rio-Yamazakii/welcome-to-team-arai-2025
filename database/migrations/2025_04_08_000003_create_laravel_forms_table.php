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
            $table->id('form_ID');
            $table->string('name');
            $table->string('mail_address');
            $table->integer('age');
            $table->unsignedBigInteger('tech_ID');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_general_ci';
            $table->foreign('tech_ID')->references('tech_ID')->on('laravel_technologies')->onDelete('cascade');
            
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