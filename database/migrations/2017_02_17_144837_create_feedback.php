<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateFeedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->comment = '反馈提问表';
            $table->increments('id');
            $table->integer('user_id', false, true)->comment('user表外键');
            $table->index('user_id');
            //$table->foreign('user_id')->references('id')->on('user');
            $table->text('content')->comment('提问内容');
            $table->integer('created_at', false, true)->comment('提交时间戳');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feedback');
    }
}
