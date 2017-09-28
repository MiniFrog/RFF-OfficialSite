<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWxdptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wxdpt', function (Blueprint $table) {
            $table->comment = '部门介绍';
            $table->increments('id');

            $table->char('dpt', 5)->comment('部门名称');
            $table->text('intro')->comment('部门介绍');
            $table->char('imgpathf')->comment('图片1');
            $table->char('imgpaths')->comment('图片2');
            $table->char('imgpatht')->comment('图片3');

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
        Schema::drop('wxdpt');
    }
}
