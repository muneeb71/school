<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('form_no');
            $table->unsignedInteger('my_class_id');
            $table->string('section');
            $table->string('roll_no');
            $table->string('name');
            $table->string('age');
            $table->string('religion');
            $table->string('nationality');
            $table->string('domicile');
            $table->string('phone');
            $table->string('dob');
            $table->string('gender');
            $table->string('address');
            $table->string('cnic');
            $table->string('bus');
            $table->string('photo')->default(Qs::getDefaultUserImage())->nullable();
            $table->string('qouta_name');
            $table->string('group_name');
            $table->string('subject_code');
            $table->string('subject_combination');
            $table->string('session');

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
        Schema::dropIfExists('student_records');
    }
}
