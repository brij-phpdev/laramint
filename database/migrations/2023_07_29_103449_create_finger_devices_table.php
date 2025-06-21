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
        Schema::create('finger_devices', function (Blueprint $table) {
            $table->id();
            
            $table->integer('student_id')->nullable();
            $table->string('name')->nullable();

            $table->ipAddress('ip')->nullable();

            $table->string('serialNumber')->unique();
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
        Schema::dropIfExists('finger_devices');
    }
};
