<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('design', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teamming');
            $table->string('havehuiyuan');
            $table->string('member1name');
            $table->string('member1xueyuan');
            $table->string('member1class');
            $table->string('member1sushe');
            $table->string('member1QQ');
            $table->string('member1dianhua');
            $table->string('member2name');
            $table->string('member2xueyuan');
            $table->string('member2class');
            $table->string('member2sushe');
            $table->string('member2QQ');
            $table->string('member2dianhua');
            $table->string('member3name');
            $table->string('member3xueyuan');
            $table->string('member3class');
            $table->string('member3sushe');
            $table->string('member3QQ');
            $table->string('member3dianhua');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('design');
    }
}
