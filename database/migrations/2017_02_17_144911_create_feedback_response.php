<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackResponse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_response', function (Blueprint $table) {
            $table->comment = '提问回答表';
            $table->increments('id');
            $table->integer('user_id', false, true)->comment('用户表外键');
            $table->index('user_id');
            //$table->foreign('user_id')->references('id')->on('user');
            $table->integer('question_id', false, true)->comment('提问表外键');
            $table->index('question_id');
            $table->integer('admin_id', false, true)->comment('回应的管理员');
            $table->index('admin_id');
            //$table->foreign('question_id')->references('id')->on('feedback');
            $table->text('content')->comment('回答内容');
            $table->integer('created_at', false, true)->comment('创建时间戳');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feedback_response');
    }
}
