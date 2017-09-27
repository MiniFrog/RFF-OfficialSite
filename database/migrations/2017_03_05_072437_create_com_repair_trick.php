<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComRepairTrick extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('com_repair_trick', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->index('user_id');
            $table->integer('article_id', false, true);
            $table->index('article_id');
            $table->text('content');
            $table->text('thumb_up');
            $table->integer('created_at', false, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('com_repair_trick');
    }
}
