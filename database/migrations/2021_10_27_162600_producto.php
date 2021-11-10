<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Producto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string("num_inventario");
            $table->bigInteger('area_id')->unsigned();
            $table->bigInteger('tipo_id')->unsigned();
            $table->string('fecha_alta');
            $table->bigInteger('marca_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('status_id')->unsigned();
            $table->bigInteger('modelo_id')->unsigned();
            $table->string('num_serie');
            $table->bigInteger('categoria_id')->unsigned();
            $table->bigInteger('subcategoria_id')->unsigned();
            $table->string('imagen');
            $table->timestamps();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete("cascade");
            $table->foreign('tipo_id')->references('id')->on('tipoaltas')->onDelete("cascade");
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete("cascade");
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
            $table->foreign('status_id')->references('id')->on('estados')->onDelete("cascade");
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete("cascade");
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete("cascade");
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias')->onDelete("cascade");
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
