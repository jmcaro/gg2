<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idioma_id')->unsigned();
            $table->foreign('idioma_id')->references('id')->on('languages')->onDelete('cascade');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('icono');
            $table->string('arbol');
            $table->string('restriccion');
            $table->string('modulo');
            $table->string('estado');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('menus');
    }
}
