<?php

use Illuminate\Database\Seeder;
class UsersAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * $table->increments('id_admin');
            $table->integer('antiguedad');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('users')->onDelete('Cascade');
            $table->timestamps();
        });*/
        $faker = Faker::create();
        \DB::table('kardex')->insert([
            [
                'nombres'       => 'Admin',
                'ap_paterno'    => ' ',
                'ap_materno'    => ' ',
                'ci'            => '33331',
                'sexo'          => true,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => ' ',
                'ci'            => '33332',
                'sexo'          => true,
                'estado'        => true,
            ],
            [
                'nombres'       => $faker->firstName,
                'ap_paterno'    => $faker->lastName,
                'ap_materno'    => ' ',
                'ci'            => '33333',
                'sexo'          => true,
                'estado'        => true,
            ],
        ]);
        \DB::table('users')->insert([
            [
                'email'         => 'admin@admin.com',
                'password'      => \Hash::make('33331'),
                'tipo_usuario'  => 3,
                'id_kardex'     => 1,
            ],
            [
                'email'         => '33332@gmail.com',
                'password'      => \Hash::make('33332'),
                'tipo_usuario'  => 3,
                'id_kardex'     => 2,
            ],
            [
                'email'         => '33333@gmail.com',
                'password'      => \Hash::make('33333'),
                'tipo_usuario'  => 3,
                'id_kardex'     => 3,
            ],
        ]);
        \DB::table('administrador')->insert([
            [
                'antiguedad'   => 2,
                'id_user'      => 1,
            ],
            [
                'antiguedad'   => 1,
                'id_user'      => 2,
            ],
            [
                'antiguedad'   => 3,
                'id_user'      => 3,
            ],
        ]);
    }
}
