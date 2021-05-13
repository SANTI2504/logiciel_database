<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_exams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->date('exam_date');
            $table->string('symptom', 250);
            $table->string('diagnosis', 500);
            $table->foreignId('appointments_id')->references('id')->on('appointments');
            $table->foreignId('medical_histories_id')->references('id')->on('medical_histories');
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
        Schema::dropIfExists('medical_exams');
    }
}
