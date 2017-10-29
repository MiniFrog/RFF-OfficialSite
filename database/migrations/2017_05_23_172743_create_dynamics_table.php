<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDynamicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dynamics', function (Blueprint $table) {
            $table->comment = '首页动态组件的信息库';
            $table->increments('id');
            $table->char('imgpath', 50)->comment('图片地址');
            $table->char('title', 20)->comment('标题');
            $table->char('summary', 50)->comment('摘要');
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
        Schema::drop('dynamics');
    }
}
