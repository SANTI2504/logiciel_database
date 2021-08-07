<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialists', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('users_id')->unsigned();
            //$table->foreign('users_id')->references('id')->on('users');
            $table->string('name');
            $table->string('lastnames', 45);
            $table->string('number_document', 45)->unique();
            $table->date('date_of_bird');
            $table->string('number_cell', 20);
            $table->bigInteger('type_document_id')->unsigned();
            $table->bigInteger('roles_id')->unsigned();
            $table->bigInteger('eps_id')->unsigned();
            $table->string('speciality', 45)->nullable();
            $table->foreign('type_document_id')->references('id')->on('type_documents');
            $table->foreign('roles_id')->references('id')->on('roles');
            $table->foreign('eps_id')->references('id')->on('eps');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('specialists');
    }
}
