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
            $table->boolean('passport');
            $table->boolean('financing');
            $table->boolean('insurance_form');
            $table->boolean('pass');
            $table->boolean('visaform');
            $table->boolean('picture');
            $table->boolean('travelreservation');
            $table->boolean('hotelreservation');
            $table->boolean('employment');
            $table->boolean('travelinsurance');
            $table->boolean('financial_means');
            $table->boolean('passcopy');
            $table->boolean('consularfee');
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
