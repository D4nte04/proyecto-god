<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Profesor;
use App\Models\Propuesta;

class AdministradorController extends Controller
{
    public function indexAdmin()
    {
        $estudiantes = Estudiante::all();
        $profesores = Profesor::all();
        $propuestas = Propuesta::all();
        return view('administrador.index',compact(['estudiantes','profesores','propuestas']));
    }
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
    public function listaProp(Propuesta $propuesta)
    {
        $estudiantes = Estudiante::orderBy('nombre')->get();
        $propuestas = Propuesta::all();
        return view('administrador.lista-propuestas',compact(['propuestas','estudiantes']));
    }
    public function ingresarAlum()
    {
        return view('administrador.agregar-alumno');
    }
    public function ingresarProf()
    {
        return view('administrador.agregar-profesor');
    }
}
