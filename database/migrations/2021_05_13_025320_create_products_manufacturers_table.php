<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsManufacturersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_manufacturers', function (Blueprint $table) {
            //pendiente revision tabla creada por relacion  muchos a muchos
            $table->id();
            $table->biginteger('lab_manufacturers_id')->unsigned();
            $table->biginteger('products_id')->unsigned();
            $table->foreign('lab_manufacturers_id')->references('id')->on('lab_manufacturers');
            $table->foreign('products_id')->references('id')->on('products');
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
        Schema::dropIfExists('products_manufacturers');
    }
}
