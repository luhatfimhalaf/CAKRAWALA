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
        Schema::create('user_answer', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key untuk user
            $table->foreignId('quiz_id')->constrained('quiz')->onDelete('cascade'); // Foreign key untuk quiz
            $table->char('question_1', 255)->nullable(); // Jawaban untuk pertanyaan 1
            $table->char('question_2', 255)->nullable(); // Jawaban untuk pertanyaan 2
            $table->char('question_3', 255)->nullable(); // Jawaban untuk pertanyaan 3
            $table->char('question_4', 255)->nullable(); // Jawaban untuk pertanyaan 4
            $table->char('question_5', 255)->nullable(); // Jawaban untuk pertanyaan 5
            $table->integer('attempt')->default(0);
            $table->integer('finish_time');
            $table->integer('score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_answer');
    }
};
