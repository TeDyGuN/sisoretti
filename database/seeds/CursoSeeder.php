<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curso')->insert([
            [
                'nombre' => '1ro Primaria',
                'id_aula'=> '1',
            ],
            [
                'nombre' => '2do Primaria',
                'id_aula'=> '2',
            ],
            [
                'nombre' => '3ro Primaria',
                'id_aula'=> '3',
            ],
            [
                'nombre' => '4to Primaria',
                'id_aula'=> '4',
            ],
            [
                'nombre' => '5to Primaria',
                'id_aula'=> '5',
            ],
            [
                'nombre' => '6to Primaria',
                'id_aula'=> '6',
            ],
            [
                'nombre' => '1ro Secundaria',
                'id_aula'=> '7',
            ],
            [
                'nombre' => '2do Secundaria',
                'id_aula'=> '8',
            ],
            [
                'nombre' => '3ro Secundaria',
                'id_aula'=> '9',
            ],
            [
                'nombre' => '4to Secundaria',
                'id_aula'=> '1',
            ],
            [
                'nombre' => '5to Secundaria',
                'id_aula'=> '2',
            ],
            [
                'nombre' => '6to Secundaria',
                'id_aula'=> '3',
            ],
        ]);
    }
}
