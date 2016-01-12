<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;
class DocenteSeeder extends Seeder
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
                'ci'            => '22221',
                'sexo'          => true,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '22222',
                'sexo'          => false,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '22223',
                'sexo'          => true,
                'estado'        => false,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '22224',
                'sexo'          => false,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '22225',
                'sexo'          => true,
                'estado'        => true,
            ],
        ]);
        \DB::table('users')->insert([
            [
                'email'         => '22221@gmail.com',
                'password'      => \Hash::make('22221'),
                'tipo_usuario'  => 2,
                'id_kardex'     => 13,
            ],
            [
                'email'         => '22222@gmail.com',
                'password'      => \Hash::make('22222'),
                'tipo_usuario'  => 2,
                'id_kardex'     => 14,
            ],
            [
                'email'         => '22223@gmail.com',
                'password'      => \Hash::make('22223'),
                'tipo_usuario'  => 2,
                'id_kardex'     => 15,
            ],
            [
                'email'         => '22224@gmail.com',
                'password'      => \Hash::make('22224'),
                'tipo_usuario'  => 2,
                'id_kardex'     => 16,
            ],
            [
                'email'         => '22225@gmail.com',
                'password'      => \Hash::make('22225'),
                'tipo_usuario'  => 2,
                'id_kardex'     => 17,
            ],
        ]);
        \DB::table('docente')->insert([
            [
                'antiguedad'   => 8,
                'id_user'      => 13,
            ],
            [
                'antiguedad'   => 5,
                'id_user'      => 14,
            ],
            [
                'antiguedad'   => 1,
                'id_user'      => 15,
            ],
            [
                'antiguedad'   => 3,
                'id_user'      => 16,
            ],
            [
                'antiguedad'   => 4,
                'id_user'      => 17,
            ],
        ]);
    }
}
