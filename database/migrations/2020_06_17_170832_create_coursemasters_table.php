<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursemastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('courses', function (Blueprint $table) {
            $table->increments('course_id');
            $table->string('course_name');
            $table->string('course_desc');
             $table->string('course_hod');
             $table->integer('course_seats');
             $table->integer('course_duration');
             $table->integer('course_fees');
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
        Schema::dropIfExists('courses');
    }
}
