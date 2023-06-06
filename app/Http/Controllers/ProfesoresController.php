<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;
use App\Models\Estudiante;


class ProfesoresController extends Controller
{
    public function index()
    {
        $profesores    = Profesor::orderBy('nombre')->get();
        return view('profesores.index',compact('profesores'));
    }
    public function profesorIngresar(Request $request)
    {
        // $alumno = $estudiante->where('rut', $request->alumno)->get();
        $id = $request->profesor;
        return redirect()->route('profesor.ingresado',$id);
    }
    public function profesorIngresado(Profesor $profesor)
    {
        $propuestas     = Propuesta::orderBy('id')->get();
        $estudiantes     = Estudiante::orderBy('rut')->get();
        return view('profesores.profesor',compact(['profesor','propuestas','estudiantes']));
    }
}
