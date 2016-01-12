<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('asignatura');
            $table->string('sigla', 4);
            $table->integer('id_docente')->unsigned()->nullable();
            $table->foreign('id_docente')->references('id')->on('docente')->onDelete('Cascade');
            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id')->on('curso')->onDelete('Cascade');
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
        Schema::drop('materias');
    }
}
