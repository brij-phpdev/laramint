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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->integer('uid')->unsigned()->default(0);
            $table->integer('attendance_taken_by')->nullable();
            $table->string('attendance_photograph')->nullable();
            $table->boolean('state')->default(0);
            $table->time('attendance_time')->default(date("H:i:s"));
            $table->date('attendance_date')->default(date("Y-m-d"));
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->unsignedBigInteger('session_term_id');
            $table->foreign('session_term_id')->references('id')->on('session_term');
            $table->boolean('type')->unsigned()->default(0);
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
        Schema::dropIfExists('attendances');
    }
};
