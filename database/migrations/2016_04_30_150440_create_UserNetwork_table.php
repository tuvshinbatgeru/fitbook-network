<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('UserNetwork', function (Blueprint $table) {
            $table->bigInteger('userId');
            $table->bigInteger('parentId');
            $table->bigInteger('blockId',20);
            $table->int('fCount',75);
            $table->int('mCount',75);
            $table->int('rankId',75);
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
        //
        Schema::drop('UserNetwork');
    }
}
