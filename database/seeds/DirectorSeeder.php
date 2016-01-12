<?php

use Illuminate\Database\Seeder;

use \Faker\Factory as Faker;
class DirectorSeeder extends Seeder
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
                'ci'            => '44441',
                'sexo'          => false,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => $faker->lastName,
                'ci'            => '44442',
                'sexo'          => true,
                'estado'        => false,
            ]
        ]);
        \DB::table('users')->insert([
            [
                'email'         => '44441@gmail.com',
                'password'      => \Hash::make('44441'),
                'tipo_usuario'  => 4,
                'id_kardex'     => 4,
            ],
            [
                'email'         => '44442@gmail.com',
                'password'      => \Hash::make('44442'),
                'tipo_usuario'  => 4,
                'id_kardex'     => 5,
            ]
        ]);
        \DB::table('director')->insert([
            [
                'antiguedad'   => 6,
                'id_user'      => 4,
            ],
            [
                'antiguedad'   => 14,
                'id_user'      => 5,
            ]
        ]);
    }
}
