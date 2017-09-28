<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateQqUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('qq_user', function (Blueprint $table) {
            $table->comment = 'qq授权信息表';
            $table->increments('id');
            $table->integer('user_id', false, true)->comment('user表外键');
            $table->index('user_id');
            //$table->foreign('user_id')->references('id')->on('user');
            $table->char('open_id', 32)->comment('用户的openid');
            $table->char('access_token', 32)->comment('用户的口令');
            $table->char('refresh_token', 32)->comment('刷新用口令');
            $table->text('user_info')->comment('php序列化存储用户的头像地址和qq昵称');
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
        Schema::drop('qq_user');
    }
}
