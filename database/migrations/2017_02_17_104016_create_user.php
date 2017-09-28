<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user', function(Blueprint $table) {
            $table->comment = '用户表';
            $table->increments('id');
            $table->char('username', 32)->comment('用户名，暂时不用');
            $table->char('password', 32)->comment('用户密码，暂时不用');
            $table->char('nickname', 32)->comment('用户自定义昵称，暂时不用');
            $table->integer('regis_time', false, true)->comment('用户注册时间戳');
            $table->integer('login_time', false, true)->comment('用户最后一次登陆时间戳');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('user');
    }
}
