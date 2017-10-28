<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tech_group', function (Blueprint $table) {
            $table->increments('id');
            $table->char('group', 10)->comment('小组名称');
            $table->text('intro')->comment('小组介绍');
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
        Schema::drop('tech_group');
    }
}
