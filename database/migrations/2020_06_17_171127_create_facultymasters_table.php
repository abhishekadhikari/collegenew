<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultymastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_details', function (Blueprint $table) {
           $table->increments('faculty_id');
           $table->string('faculty_name');
           $table->string('faculty_email');
           $table->string('faculty_no');
           $table->string('subject');
            
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
        Schema::dropIfExists('faculty_details');
    }
}
