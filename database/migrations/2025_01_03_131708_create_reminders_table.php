<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemindersTable extends Migration
{
    public function up()
    {
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('frequency');
            $table->integer('duration');
            $table->time('time');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('reminders');
    }
}
