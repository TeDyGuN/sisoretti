<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /*$this->call(UsersAdminSeeder::class);
        $this->call(TipoUsuarioTableSeeder::class);
        $this->call(AulaSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(SecretariaSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(DocenteSeeder::class);*/
        $this->call(MateriaSeeder::class);
        Model::reguard();
    }
}
