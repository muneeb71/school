<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance', function (Blueprint $table) {
            $table->id();
            $table->integer('roll_no');
            $table->integer('present');
            $table->integer('leaves');
            $table->integer('absent');
            $table->integer('no_of_lectures');
            $table->integer('subject_id');
            $table->integer('teacher_id');
            $table->string('from_date');
            $table->string('to_date');

            $table->string('remarks');
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
        Schema::dropIfExists('attendance');
    }
}
