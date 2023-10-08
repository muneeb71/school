<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fees_records', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('my_class_id')->nullable();
            $table->string('group_name')->nullable();
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
        Schema::dropIfExists('fees_records');
    }
}
