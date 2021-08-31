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
            $table->string('name');
            $table->string('lastnames', 45);
            $table->string('number_document', 45)->unique();
            $table->date('date_of_bird');
            $table->string('number_cell', 20);
            $table->string('address', 150);
            $table->string('city', 75);
            $table->string('location', 75);
            $table->string('neighborhood', 75);
            $table->bigInteger('gender_id')->unsigned();
            $table->bigInteger('civil_status_id')->unsigned();
            $table->bigInteger('type_document_id')->unsigned();
            $table->bigInteger('roles_id')->unsigned();
            $table->bigInteger('eps_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->foreign('civil_status_id')->references('id')->on('civil_statuses');
            $table->foreign('type_document_id')->references('id')->on('type_documents');
            $table->foreign('roles_id')->references('id')->on('roles');
            $table->foreign('eps_id')->references('id')->on('eps');
            /*
            //pendiente
            $table->foreign('roles_id')->references('id')->on('roles');
            $table->enum ('state', ['active', 'inactive']);
            */
            //creado por jetstream
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            //$table->string('profile_photo_path', 2048)->nullable();
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
