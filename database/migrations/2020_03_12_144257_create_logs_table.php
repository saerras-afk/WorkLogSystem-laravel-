<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('userId')->unsigned();
            $table->integer('taskId')->unsigned();
            $table->date('date');
            $table->time('startTime');
            $table->time('endTime');
            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('taskId')->references('id')->on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
