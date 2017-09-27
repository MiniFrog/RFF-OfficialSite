<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateLeagueSignUp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team', function (Blueprint $table) {
            $table->comment = '队伍表';
            $table->increments('id');
            $table->char('team_name', 20)->comment('队伍名');
            $table->string('slogen')->comment('口号');
        });
        Schema::create('member', function(Blueprint $table) {
            $table->comment = '成员表，包括队长';
            $table->increments('id');
            $table->integer('team_id', false, true)->comment('team表外健'); //队伍表的外键
            $table->foreign('team_id')->references('id')->on('team');
            $table->boolean('is_leader')->comment('1是队长，0不是');
            $table->char('name', 20)->comment('队伍名');
            $table->char('phone', 11)->comment('电话号码');
            $table->char('qq', 11)->comment('qq号');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('member');
        Schema::drop('team');
    }
}
