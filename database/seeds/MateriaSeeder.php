<?php

use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            [
                'asignatura' => 'Matematica',
                'sigla'      => 'MAT1P',
                'id_curso'   => 1
            ],
            [
                'asignatura' => 'Deportes',
                'sigla'      => 'DP2P',
                'id_curso'   => 2
            ],
            [
                'asignatura' => 'Ciencias Sociales',
                'sigla'      => 'CS3P',
                'id_curso'   => 3
            ],
            [
                'asignatura' => 'Quimica',
                'sigla'      => 'QMC6S',
                'id_curso'   => 12
            ]
        ]);
    }
}
