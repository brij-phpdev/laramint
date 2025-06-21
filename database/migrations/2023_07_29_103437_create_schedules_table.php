<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->time('time_in');
            $table->time('time_out');
            $table->timestamps();
        });
        
        Schema::create('schedule_students', function (Blueprint $table) {
            $table->id();
//            $table->integer('student_id')->unsigned();
//            $table->integer('schedule_id')->unsigned();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->unsignedBigInteger('schedule_id');
            $table->foreign('schedule_id')->references('id')->on('schedules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_students');        
        Schema::dropIfExists('schedules');
    }
};
