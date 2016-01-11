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
        \DB::table('kardex')->insert(array(
            'nombres'       => 'Admin',
            'ap_paterno'    => ' ',
            'ap_materno'    => ' ',
            'ci'            => '55555',
            'sexo'          => true,
            'estado'        => true,
        ));
        \DB::table('users')->insert(array(
            'email'         => 'admin@admin.com',
            'password'      => \Hash::make('GORETTI2016'),
            'tipo_usuario'  => 3,
            'id_kardex'     => 1,
        ));
        \DB::table('administrador')->insert(array(
            'antiguedad'   => 0,
            'id_user'      => 1,
        ));
    }
}
