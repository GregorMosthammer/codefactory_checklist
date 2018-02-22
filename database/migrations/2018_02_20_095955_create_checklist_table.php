<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('passport')->nullable();
            $table->boolean('financing')->nullable();
            $table->boolean('insurance')->nullable();
            $table->boolean('pass')->nullable();
            $table->boolean('visaform')->nullable();
            $table->boolean('picture')->nullable();;
            $table->boolean('travelreservation')->nullable();;
            $table->boolean('hotelreservation')->nullable();;
            $table->boolean('employment')->nullable();;
            $table->boolean('travelinsurance')->nullable();;
            $table->boolean('financial_means')->nullable();;
            $table->boolean('passcopy')->nullable();;
            $table->boolean('consularfee')->nullable();;
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students');
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
        Schema::dropIfExists('checklist');
    }
}
