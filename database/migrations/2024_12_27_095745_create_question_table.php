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
        Schema::create('question', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quiz_id')->constrained('quiz')->onDelete('cascade');
            $table->integer('question_no')->nullable(false);
            $table->string('question', 255);
            $table->string('answer_a', 255)->nullable();
            $table->string('answer_b', 255)->nullable();
            $table->string('answer_c', 255)->nullable();
            $table->string('answer_d', 255)->nullable();
            $table->string('right_answer', 255)->nullable(false); // Menyimpan nama kolom jawaban
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question');
    }
};
