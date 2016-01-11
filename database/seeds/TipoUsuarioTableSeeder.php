<?php

use Illuminate\Database\Seeder;

class TipoUsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('TipoUsuario')->insert(array(
            'descripcion' => 'Estudiante',
        ));
        \DB::table('TipoUsuario')->insert(array(
            'descripcion' => 'Docente',
        ));
        \DB::table('TipoUsuario')->insert(array(
            'descripcion' => 'Administrador',
        ));
        \DB::table('TipoUsuario')->insert(array(
            'descripcion' => 'Director',
        ));
        \DB::table('TipoUsuario')->insert(array(
            'descripcion' => 'Secretaria',
        ));
    }
}
