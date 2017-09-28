<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateAppointment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment', function (Blueprint $table) {
            $table->comment = '预约维修表';
            $table->increments('id');
            $table->string('name', 80)->comment('姓名');
            $table->char('phone_num', 11)->comment('手机号');
            $table->string('item_name', 80)->comment('电器名称');
            $table->tinyInteger('campus')->comment('校区，0南校，1北校');
            $table->string('dormitory', 30)->comment('宿舍');
            $table->tinyInteger('under_exam')->comment('是否审核通过，0为未审核，1为通过，2为不通过');
            $table->text('detail')->comment('电器问题描述');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appointment');
    }
}
