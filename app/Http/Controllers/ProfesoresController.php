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
        $estudiantes    = Estudiante::orderBy('nombre')->get();
        $propuestas    = Propuesta::orderBy('id')->get();   

        return view('profesores.index',compact(['profesores','estudiantes','propuestas']));
    }
    public function profesorIngresar(Request $request)
    {
        // $alumno = $estudiante->where('rut', $request->alumno)->get();
        $id_profesor = $request->profesor;
        $rut_estudiante = $request->alumno;
        $propuesta = Propuesta::where('estudiante_rut',$rut_estudiante)->orderByDesc('fecha')->first();
        return redirect()->route('profesor.ingresado',[$id_profesor,$propuesta->id]);
    }
    public function profesorIngresado(Profesor $profesor,Propuesta $propuesta)  
    {
        $propuestas     = Propuesta::orderBy('id')->get();
        $estudiantes     = Estudiante::orderBy('rut')->get();
        $profesores     = Profesor::orderBy('id')->get();
        return view('profesores.profesor',compact(['profesor','propuesta','propuestas','estudiantes','profesores']));
    }
}
