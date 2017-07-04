<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    //
    public function listarJson($direccion)
    {
        $departamento = Departamento::where('idDireccion', $direccion)->get();
        return $departamento->toJson();
    }
}
