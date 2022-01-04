<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('course_id');
            $table->string('student_id')->unique();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('g_name');
            $table->string('occupation');
            $table->string('email_id')->unique();
            $table->string('phone')->unique();
            $table->string('p_address');
            $table->string('per_address');
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
        Schema::dropIfExists('students');
    }
}
