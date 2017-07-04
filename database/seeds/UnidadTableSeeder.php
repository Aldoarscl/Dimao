<?php

use Illuminate\Database\Seeder;

class UnidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unidads')->insert([
            'nombre' => 'Dirección',
            'idDepartamento' => 1
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Subdirección',
            'idDepartamento' => 1
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Presupuesto',
            'idDepartamento' => 1
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Bodega Central',
            'idDepartamento' => 1
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Prevención de Riesgo',
            'idDepartamento' => 1
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Oficina de Parte',
            'idDepartamento' => 1
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Mantención y Bacheo',
            'idDepartamento' => 1
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Mayordomía',
            'idDepartamento' => 1
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Operaciones',
            'idDepartamento' => 2
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Área Técnica',
            'idDepartamento' => 2
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Área Logística',
            'idDepartamento' => 2
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Supervisión',
            'idDepartamento' => 2
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Áreas Verdes',
            'idDepartamento' => 3
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Arbolado',
            'idDepartamento' => 3
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Construcción',
            'idDepartamento' => 3
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Supervisión de mantención',
            'idDepartamento' => 3
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Reparación',
            'idDepartamento' => 3
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Mantención de espacios públicos',
            'idDepartamento' => 3
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Canchas',
            'idDepartamento' => 3
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Medio Ambiente',
            'idDepartamento' =>4
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Área educación ambiental',
            'idDepartamento' => 4
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Área comunicaciones ambientales ',
            'idDepartamento' => 4
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Área desarrollo de proyectos, seguimiento y fiscalización ambiental',
            'idDepartamento' => 4
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Área de reciclaje',
            'idDepartamento' =>4
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Higiene Ambiental y Zonnosis',
            'idDepartamento' => 5
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Veterinaria',
            'idDepartamento' => 5
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Zoonosis',
            'idDepartamento' => 5
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Aseo',
            'idDepartamento' => 6
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Retiro de escombros',
            'idDepartamento' => 6
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Residuos domiciliarios',
            'idDepartamento' => 6
        ]);
        DB::table('unidads')->insert([
            'nombre' => '',
            'idDepartamento' => 6
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Aseo centro',
            'idDepartamento' => 6
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Aseo comunal',
            'idDepartamento' =>6
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Sobreproductores',
            'idDepartamento' => 6
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Emergencia',
            'idDepartamento' => 7
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Planificación y coordinación',
            'idDepartamento' => 7
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Gestión social',
            'idDepartamento' => 7
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Gestión técnica',
            'idDepartamento' => 7
        ]);
        DB::table('unidads')->insert([
            'nombre' => 'Limpieza sumideros',
            'idDepartamento' => 7
        ]);
    }
}
