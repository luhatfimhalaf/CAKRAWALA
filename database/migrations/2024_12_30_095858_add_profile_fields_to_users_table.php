<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_picture')->nullable()->after('password');
            $table->text('address')->nullable()->after('profile_picture');
            $table->text('work_experience')->nullable()->after('address');
            $table->string('last_education')->nullable()->after('work_experience');
            $table->string('expertise')->nullable()->after('last_education');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['profile_picture', 'address', 'work_experience', 'last_education', 'expertise']);
        });
    }
}
