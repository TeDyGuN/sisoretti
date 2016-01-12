<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('periodo', 6);
            $table->decimal('nota');
            $table->integer('id_estudiante')->unsigned();
            $table->foreign('id_estudiante')->references('id')->on('estudiante')->onDelete('Cascade');
            $table->integer('id_docente')->unsigned();
            $table->foreign('id_docente')->references('id')->on('docente')->onDelete('Cascade');
            $table->integer('id_curso')->unsigned();
            $table->foreign('id_curso')->references('id')->on('curso')->onDelete('Cascade');
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('Cascade');
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
        Schema::drop('notas');
    }
}
