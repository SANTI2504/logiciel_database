<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('names', 45);
            $table->string('lastnames', 45);
            $table->string('number_document', 45);
            $table->string('email', 75);
            //pendiente revision
            $table->date('date_of_bird');
            $table->string('number_cel', 20);
            $table->string('password', 1000);
            //pendiente revision
            $table->string ('active', 5);
            $table->foreignId('type_document_id')->references('id')->on('type_document');
            $table->foreignId('roles_id')->references('id')->on('roles');
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
        Schema::dropIfExists('users');
    }
}
