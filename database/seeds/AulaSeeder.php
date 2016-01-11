<?php

use Illuminate\Database\Seeder;

class AulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aula')->insert([
            [
                'nombre' => '100'
            ],
            [
                'nombre' => '101'
            ],
            [
                'nombre' => '101'
            ],
            [
                'nombre' => '102'
            ],
            [
                'nombre' => '103'
            ],
            [
                'nombre' => '104'
            ],
            [
                'nombre' => '105'
            ],
            [
                'nombre' => '106'
            ],
            [
                'nombre' => '107'
            ],
        ]);
    }
}
