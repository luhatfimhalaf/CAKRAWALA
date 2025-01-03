<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reminders', function (Blueprint $table) {
            $table->string('reminder_type')->default('default_value'); // Gantilah 'default_value' sesuai kebutuhan
        });
    }
    
    public function down()
    {
        Schema::table('reminders', function (Blueprint $table) {
            $table->dropColumn('reminder_type');
        });
    }
    
};
