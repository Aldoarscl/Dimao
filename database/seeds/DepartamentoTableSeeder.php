<?php

use Illuminate\Database\Seeder;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
            'nombre' => 'Dirección',
            'idDireccion' => 1
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Operaciones',
            'idDireccion' => 1
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Áreas Verdes',
            'idDireccion' => 1
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Medio Ambiente',
            'idDireccion' => 1
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Higiene Ambiental y Zonnosis',
            'idDireccion' => 1
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Aseo',
            'idDireccion' => 1
        ]);
        DB::table('departamentos')->insert([
            'nombre' => 'Emergencia',
            'idDireccion' => 1
        ]);
    }
}
