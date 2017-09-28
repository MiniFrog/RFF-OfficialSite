<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateComReport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_report', function (Blueprint $table) {
            $table->comment = '报道评论表';
            $table->increments('id');
            $table->integer('user_id', false, true)->comment('user表外键');
            $table->index('user_id');
            //$table->foreign('user_id')->references('id')->on('user');
            $table->integer('article_id', false, true)->comment('report表外键');
            $table->index('article_id');
            //$table->foreign('article_id')->references('id')->on('report');
            $table->text('content')->comment('评论内容');
            $table->text('thumb_up');
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
        Schema::drop('com_report');
    }
}
