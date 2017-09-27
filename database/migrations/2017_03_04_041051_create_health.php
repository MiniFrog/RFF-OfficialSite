<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health', function (Blueprint $table) {
            $table->increments('id');
            $table->char('data_type', 1);//1是心跳，2是脉搏
            $table->char('data_time', 12);
            $table->text('data');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('health');
    }
}
