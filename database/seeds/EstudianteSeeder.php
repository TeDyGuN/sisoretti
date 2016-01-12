<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;
class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        \DB::table('kardex')->insert([
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '11111',
                'sexo'          => true,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '11112',
                'sexo'          => true,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '11113',
                'sexo'          => true,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '11114',
                'sexo'          => true,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '11115',
                'sexo'          => true,
                'estado'        => true,
            ],
        ]);
        \DB::table('users')->insert([
            [
                'email'         => '11111@gmail.com',
                'password'      => \Hash::make('11111'),
                'tipo_usuario'  => 1,
                'id_kardex'     => 8,
            ],
            [
                'email'         => '11112@gmail.com',
                'password'      => \Hash::make('11112'),
                'tipo_usuario'  => 1,
                'id_kardex'     => 9,
            ],
            [
                'email'         => '11113@gmail.com',
                'password'      => \Hash::make('11113'),
                'tipo_usuario'  => 1,
                'id_kardex'     => 10,
            ],
            [
                'email'         => '11114@gmail.com',
                'password'      => \Hash::make('11114'),
                'tipo_usuario'  => 1,
                'id_kardex'     => 11,
            ],
            [
                'email'         => '11115@gmail.com',
                'password'      => \Hash::make('11115'),
                'tipo_usuario'  => 1,
                'id_kardex'     => 12,
            ],
        ]);
        \DB::table('estudiante')->insert([
            [
                'id_curso'     => 2,
                'id_user'      => 8,
            ],
            [
                'id_curso'     => 1,
                'id_user'      => 9,
            ],
            [
                'id_curso'     => 3,
                'id_user'      => 10,
            ],
            [
                'id_curso'     => 12,
                'id_user'      => 11,
            ],
            [
                'id_curso'     => 12,
                'id_user'      => 12,
            ],
        ]);
    }
}
