<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('association', function (Blueprint $table) {
            $table->comment = '关于无协';
            $table->increments('id');
            $table->text('intro', 200)->comment('协会简介');
            $table->char('introimgpath', 50)->comment('协会简介图片');
            $table->text('activity', 200)->comment('品牌活动');
            $table->char('actimgpathf', 50)->comment('活动图片1');
            $table->char('actimgpaths', 50)->comment('活动图片2');
            $table->integer('update_time')->comment('更改记录的时间戳');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('association');
    }
}
