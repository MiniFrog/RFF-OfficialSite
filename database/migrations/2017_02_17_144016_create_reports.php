<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateReports extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->comment = '报道表';
            $table->increments('id');
            $table->char('title', 60)->comment('标题');
            $table->string('abstract', 150)->comment('简介');
            $table->char('imgpath', 50)->comment('picurl');
            $table->integer('status')->comment('文章状态')->default(0);
            $table->integer('created_at', false, true)->comment('创建时间戳');
            $table->integer('updated_at', false, true)->comment('更新时间戳');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reports');
    }
}
