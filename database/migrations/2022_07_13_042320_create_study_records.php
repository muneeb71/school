<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('student_id');
            $table->string('roll_no');            
            $table->string('passing_year');
            $table->string('percentage');
            $table->string('grade');
            $table->string('elective_subjects');
            $table->string('board');
            $table->string('ins_attended');
            $table->unsignedBigInteger('total_marks');
            $table->unsignedBigInteger('obtained_marks');
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
        Schema::dropIfExists('study_records');
    }
}
