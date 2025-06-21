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
        Schema::create('student_dashboard_notifications', function (Blueprint $table) {

            $table->id();
            $table->string('notification_title');
            $table->string('notification_description')->nullable();
            $table->string('notification_attachment')->nullable();
            $table->integer('notification_created_by');
            $table->integer('created_for')->default(0); // you may use this for specfic course & session/term candidates 0=> means for all
            $table->dateTime('notification_start_date')->nullable();
            $table->dateTime('notification_end_date')->nullable();
            $table->tinyInteger('notification_priority')->default(1); // high, medium , low => 0 for high, 1 for medium, low for 2
            $table->tinyInteger('status')->default(1); // 1 for active , 0 for deactived
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
        Schema::dropIfExists('student_dashboard_notifications');
    }
};
