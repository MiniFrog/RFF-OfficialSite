<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateActivity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->comment = '活动表';
            $table->increments('id');
            $table->char('title', 60)->comment('活动标题');
            $table->string('abstract', 150)->comment('活动的简介');
            $table->text('schedule')->comment('活动的时间表，json');
            $table->text('way')->comment('报名方式，json');
            $table->string('poster', 50)->default(null);
            $table->integer('status')->comment('活动状态，1表示正在进行，0表示未开始，2表示结束');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activity');
    }
}
