<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidad;

class UnidadController extends Controller
{
    //Json
    public function listarJson($departamento)
    {
        $unidad = Unidad::where('idDepartamento', $departamento)->get();
        return $unidad->toJson();
    }
}
