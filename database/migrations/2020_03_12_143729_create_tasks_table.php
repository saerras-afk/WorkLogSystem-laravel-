<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('userId')->unsigned();
            $table->integer('projectId')->unsigned();
            $table->tinyInteger('priorityId')->unsigned();
            $table->tinyInteger('statusId')->unsigned();
            $table->integer('sprintId')->unsigned();
            $table->string('taskName');
            $table->string('description',200);
            $table->string('summary',150);
            $table->integer('projManager');
            $table->integer('scrumMaster');
            $table->integer('qualityAssurance');
            $table->integer('developer');
            $table->dateTime('deadline');
            $table->boolean('blnFlag');
            $table->timestamps();

            
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('projectId')->references('id')->on('projects');
            $table->foreign('priorityId')->references('id')->on('priorities');
            $table->foreign('statusId')->references('id')->on('statuses');
            $table->foreign('sprintId')->references('id')->on('sprints');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
