<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccasionalFeesRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occasional_fees_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('student_roll_no')->nullable();
            $table->string('student_name')->nullable();
            $table->string('fee_category')->nullable();
            $table->string('fee_particular')->nullable();
            $table->integer('amount');
            $table->string('year');
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
        Schema::dropIfExists('occasional_fees_records');
    }
}
