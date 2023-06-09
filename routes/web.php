<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ProfesoresController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[AlumnosController::class,'index'])->name('alumnos.index');
Route::post('/alumno',[AlumnosController::class,'alumnoIngresar'])->name('alumnos.ingresar');
Route::get('/alumno/{alumno}',[AlumnosController::class,'alumnoIngresado'])->name('alumnos.ingresado');
Route::get('/agregar/{alumno}',[AlumnosController::class,'agregar'])->name('alumnos.agregar');
Route::post('/agregar/{alumno}',[AlumnosController::class,'store'])->name('alumnos.store');
// Route::delete('/destroy/{alumno}/{propuesta}',[AlumnosController::class,'destroyPropuesta'])->name('propuesta.destroy');
Route::get('/comentarios/{id}',[AlumnosController::class,'verComentarios'])->name('alumnos.verComentarios');

Route::get('/index-admin',[AdministradorController::class,'indexAdmin'])->name('admin.index');
Route::get('/lista-alum',[AdministradorController::class,'listaAlum'])->name('prof.lista.alum');
Route::get('/lista-prof',[AdministradorController::class,'listaProf'])->name('prof.lista.prof');
Route::get('/lista-propuestas',[AdministradorController::class,'listaProp'])->name('prof.lista.prop');
Route::get('/ingresar-alum',[AdministradorController::class,'ingresarAlum'])->name('admin.ingresar');
Route::post('/crear-alum',[AlumnosController::class,'agregarAlumno'])->name('crear.alumno'); 
Route::get('/ingresar-prof',[AdministradorController::class,'ingresarProf'])->name('admin.ingresarP');
Route::post('/crar-prof',[ProfesoresController::class,'agregarProfesor'])->name('crear.profesor');   

Route::get('/profesores',[ProfesoresController::class,'index'])->name('profesores.index');
Route::post('/profesores',[ProfesoresController::class,'profesorIngresar'])->name('profesores.ingresar');
Route::get('/profesor/{profesor}/propuesta/{propuesta}',[ProfesoresController::class,'profesorIngresado'])->name('profesor.ingresado');
