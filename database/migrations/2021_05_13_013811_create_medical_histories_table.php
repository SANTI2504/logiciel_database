<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class     CreateMedicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->id();
            //pendiente revision
            $table->bigInteger('count_exams')->nullable();
            $table->string('last_diagnosis', 500)->nullable();
            $table->string('personal_history', 250)->nullable(); //antecedentes personales
            $table->string('family_history', 250)->nullable(); //antecedentes familiares
            $table->string('surgical_history', 5250)->nullable(); //antecedentes quirurgicos
            $table->bigInteger('patients_id')->unsigned();
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
        Schema::dropIfExists('medical_histories');
    }
}
