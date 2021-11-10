<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Areas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('planta_id')->unsigned();
            $table->bigInteger('edificio_id')->unsigned();
            $table->timestamps();
            $table->foreign('edificio_id')->references('id')->on('edificios')->onDelete("cascade");
            $table->foreign('planta_id')->references('id')->on('plantas')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
