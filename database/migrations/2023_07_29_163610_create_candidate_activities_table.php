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
        Schema::create('candidate_activities', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('user_id')->nullable(); // this will acts as student id for student to track down each activity..
            $table->unsignedBigInteger('activity_id'); 
            $table->foreign('activity_id')->references('id')->on('activity_categories');
            
            $table->string('activity_msg')->nullable(); // complete msg of activity for eaxample student has taken quiz of O Level chapter one
            $table->dateTime('activity_started_at')->nullable(); // this will acts as student id for student to track down each activity..
            $table->dateTime('activity_ended_at')->nullable(); // this will acts as student id for student to track down each activity..
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
        Schema::dropIfExists('candidate_activities');
    }
};
