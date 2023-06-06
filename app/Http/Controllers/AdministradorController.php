<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;

class AdministradorController extends Controller
{
    public function listaAlum()
    {
        $estudiantes = Estudiante::all();
        return view('administrador.lista-alumnos',compact('estudiantes'));
    }
    public function listaProf()
    {
        $profesores = Profesor::all();
        return view('administrador.lista-profesores',compact('profesores'));
    }
}
