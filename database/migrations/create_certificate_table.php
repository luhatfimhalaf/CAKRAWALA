<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateTable extends Migration
{
    public function up()
    {
        Schema::create('certificate', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('quiz_id')->constrained()->onDelete('cascade');
            $table->string('certificate_number')->unique();
            $table->integer('score');
            $table->timestamp('completion_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificate');
    }
} 