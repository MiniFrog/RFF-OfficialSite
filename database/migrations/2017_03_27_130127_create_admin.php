<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->char('username', 32)->comment('管理员用户名');
            $table->char('password', 64)->comment('管理员加密后的密码');
            $table->char('nickname', 32)->comment('管理员昵称');
            $table->tinyInteger('authority', false, false)->default(0);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin');
    }
}
