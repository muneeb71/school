<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_record', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('due_fees')->nullable();
            $table->string('paid_fees')->nullable();
            $table->string('balance')->nullable();
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
        Schema::dropIfExists('fees_record');
    }
}
