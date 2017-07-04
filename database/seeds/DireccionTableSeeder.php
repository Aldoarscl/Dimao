<?php

use Illuminate\Database\Seeder;

class DireccionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('direccions')->insert([
            'nombre' => 'DIMAO - Dirección de Medio Ambiente, Aseo, Ornato y Áreas Verdes',
        ]);
    }
}
