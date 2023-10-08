<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('form_no');
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
            $table->string('photo')->default(Qs::getDefaultUserImage())->nullable();
            $table->string('qouta_name');
            $table->string('group_name');
            $table->string('subject_code');
            $table->string('subject_combination');
            $table->string('bus')->nullable();
            $table->string('roll_no');
            $table->string('yop');
            $table->string('marks_obtained');
            $table->string('total_marks');
            $table->string('percentage');
            $table->string('grade');
            $table->string('institution');
            $table->string('board');
            $table->string('elective_subjects');
            $table->string('fathers_name');
            $table->string('fathers_cnic');
            $table->string('fathers_mobile');
            $table->string('fathers_address');
            $table->string('fathers_designation');
            $table->string('guardian_name')->nullable();
            $table->string('guardian_cnic')->nullable();
            $table->string('guardian_mobile')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('guardian_designation')->nullable();
            $table->string('session')->nullable();
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
        Schema::dropIfExists('applicants');
    }
}
