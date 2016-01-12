php<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_aula')->unsigned();
            $table->foreign('id_aula')->references('id')->on('aula')->onDelete('Cascade');
            $table->timestamps();
        });
        /*
         * id_curso INT NOT NULL,
    id_aula INT NOT NULL,
    nombre    VARCHAR(30) NOT NULL,
    PRIMARY KEY(id_curso),
    FOREIGN KEY (id_aula) REFERENCES aula(id_aula)
         * */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::drop('curso');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
