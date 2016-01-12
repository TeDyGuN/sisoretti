<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;
class SecretariaSeeder extends Seeder
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
                'ci'            => '55551',
                'sexo'          => false,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '55552',
                'sexo'          => true,
                'estado'        => false,
            ]
        ]);
        \DB::table('users')->insert([
            [
                'email'         => '55551@gmail.com',
                'password'      => \Hash::make('55551'),
                'tipo_usuario'  => 5,
                'id_kardex'     => 6,
            ],
            [
                'email'         => '55552@gmail.com',
                'password'      => \Hash::make('55552'),
                'tipo_usuario'  => 5,
                'id_kardex'     => 7,
            ]
        ]);
        \DB::table('secretaria')->insert([
            [
                'antiguedad'   => 8,
                'id_user'      => 6,
            ],
            [
                'antiguedad'   => 4,
                'id_user'      => 7,
            ]
        ]);
    }
}
