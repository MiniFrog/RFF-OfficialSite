<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWxlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wxls', function (Blueprint $table) {
            $table->comment = '协会理事';
            $table->increments('id');

            $table->char('position', 10)->comment('职位');
            $table->char('name', 5)->comment('姓名');
            $table->text('wish')->comment('协会寄语');
            $table->char('imgpath', 50)->comment('图片位置');

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
        Schema::drop('wxls');
    }
}
