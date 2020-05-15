<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaestrosCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros_cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('curso_id')->unsigned();
            $table->foreign('curso_id')-> references('id')->on('cursos');
            $table->bigInteger('maestro_id')->unsigned();
            $table->foreign('maestro_id')-> references('id')->on('maestros');

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
        Schema::dropIfExists('maestros_cursos');
    }
}
