<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('subject1')->nullable()->after('currentdate');
            $table->string('subject2')->nullable()->after('subject1');
            $table->string('subject3')->nullable()->after('subject2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('subject1');
            $table->dropColumn('subject2');
            $table->dropColumn('subject3');
        });
    }
}