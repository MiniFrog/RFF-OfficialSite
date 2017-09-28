<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepairTrick extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_trick', function (Blueprint $table) {
            $table->comment = '报道表';
            $table->increments('id');
            $table->char('title', 60)->comment('标题');
            $table->string('abstract', 150)->comment('简介');
            $table->integer('created_at', false, true);
            $table->integer('updated_at', false, true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('repair_trick');
    }
}
