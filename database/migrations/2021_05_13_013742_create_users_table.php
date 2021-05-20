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
            $table->id(); // BIGINT(20) auto increment primary key
            $table->string('names', 45);
            $table->string('lastnames', 45);
            $table->string('number_document', 45)->unique();
            $table->string('email', 75)->unique();
            $table->date('date_of_bird');
            $table->string('number_cell', 20);
            // unsigned()-> el campo no puede ser <0
            $table-> bigInteger('type_document_id')->unsigned();
            $table-> bigInteger('roles_id')->unsigned();
            $table->string('password', 1000);
            $table->enum ('state', ['active', 'inactive']);
            $table->foreign('type_document_id')->references('id')->on('type_document');
            $table->foreign('roles_id')->references('id')->on('roles');
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
