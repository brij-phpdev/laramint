<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('student_docs', function (Blueprint $table) {
            $table->string('place')->nullable()->after('email'); // Add it after 'email' for better positioning
        });
    }

    public function down()
    {
        Schema::table('student_docs', function (Blueprint $table) {
            $table->dropColumn('place');
        });
    }
};
