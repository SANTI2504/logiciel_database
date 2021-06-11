<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxiliariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliaries', function (Blueprint $table) {
            $table->id();
            $table->biginteger('inventories_id')->unsigned();
            $table->biginteger('users_id')->unsigned();
            $table->foreign('inventories_id')->references('id')->on('inventories');
            $table->foreign('users_id')->references('id')->on('user');
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
        Schema::dropIfExists('auxiliaries');
    }
}
