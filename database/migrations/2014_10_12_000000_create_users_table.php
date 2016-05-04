<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userId');
            $table->string('fName');
            $table->string('lName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address');
            $table->string('phone');
            $table->string('registryNo');
            $table->string('accountId');
            $table->char('isNetwork', 1);
            $table->char('isManager', 1);
            $table->int('starCount');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
