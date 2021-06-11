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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name');

			$table->string('lastnames', 45);
            /*
            $table->string('number_document', 45)->unique();
            $table->date('date_of_bird');
            $table->string('number_cell', 20);
            //pendiente

            $table->bigInteger('roles_id')->unsigned();
            $table->enum ('state', ['active', 'inactive']);
            $table->foreign('type_document_id')->references('id')->on('type_document');
            $table->foreign('roles_id')->references('id')->on('roles');
            */
			//creado por jetstream
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('user');
    }
}
