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
            $table->unsignedBigInteger('user_id'); // Foreign key untuk user
            $table->unsignedBigInteger('quiz_id'); // Foreign key untuk quiz
            $table->unsignedBigInteger('course_id'); // Foreign key untuk course
            $table->char('question_1', 10)->nullable(); // Jawaban untuk pertanyaan 1
            $table->char('question_2', 10)->nullable(); // Jawaban untuk pertanyaan 2
            $table->char('question_3', 10)->nullable(); // Jawaban untuk pertanyaan 3
            $table->char('question_4', 10)->nullable(); // Jawaban untuk pertanyaan 4
            $table->char('question_5', 10)->nullable(); // Jawaban untuk pertanyaan 5
            $table->integer('attempt');
            $table->integer('finish_time');
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
