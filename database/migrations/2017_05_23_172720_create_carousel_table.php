<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carousel', function (Blueprint $table) {
            $table->comment = '轮播图储存表';
            $table->increments('id');
            $table->char('imgpath', 50)->comment('图片地址');
            $table->char('imgmes', 20)->comment('图片信息');
            $table->char('imgtype', 20)->comment('图片类型');
            $table->char('acturl', 30)->comment('跳转链接');
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
        Schema::drop('carousel');
    }
}
