<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProduResguardo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producresguardos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('archivo');
            $table->bigInteger('producto_id')->unsigned();
            $table->bigInteger('resguardo_id')->unsigned();
            $table->timestamps();
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('resguardo_id')->references('id')->on('resguardos');

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
