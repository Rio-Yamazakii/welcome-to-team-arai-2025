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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('age');
            $table->foreignId('technologies_id')->constrained('technologies')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });

        // 文字セットと照合順序を変更
        DB::statement("ALTER TABLE forms CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
