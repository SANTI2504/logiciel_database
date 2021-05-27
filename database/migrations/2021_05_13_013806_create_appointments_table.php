<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->bigInteger('type_appointments_id')->unsigned();
            $table->bigInteger('specialties_id')->unsigned();
            $table->bigInteger('patients_id')->unsigned();
            $table->foreign('type_appointments_id')->references('id')->on('type_appointments');
            $table->foreign('specialties_id')->references('id')->on('specialties');
            $table->foreign('patients_id')->references('id')->on('patients');
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
        Schema::dropIfExists('appointments');
    }
}