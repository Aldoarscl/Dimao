<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Direccion;

class DireccionController extends Controller
{
    //Json
    public function listarJson()
    {
        $direccion = Direccion::all();
        return $direccion->toJson();
    }
}
