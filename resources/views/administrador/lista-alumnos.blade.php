
@extends('templates/templates')
@section('principal-admin')
    <ul class="navbar-nav me-5">
        <li class="nav-item">
        <a class="nav-link" href="{{route('prof.lista.alum')}}">Gestión Alumnos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('prof.lista.prof')}}">Gestión Profesores</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('prof.lista.prop')}}">Estado de Propuestas</a>
        </li>
  </ul>
@endsection
@section('principal')
    {{-- principal --}}
    <div class="row mt-4">
        <div class="col-8 p-0 text-info">
            <h4 class="ps-5">Lista de Alumnos</h4>
        </div>
        <div class="col-1" style="margin-left:300px">
            <a href="{{route('admin.ingresar')}}" class="btn btn-dark text-white me-1 fw-bold" style="width: 110px;">Agregar Alumno</a>
        </div>
    </div>
    <div class="row mt-2">
        
        <div class="col mx-5 px-0">
            <table class="table table-bordered table-tabla border-vanilla table-striped">
                <thead>
                    <tr>
                        <th class="text-info" style="width: 10%;">Rut</th>
                        <th class="text-info" style="width: 20%;">Nombre</th>
                        <th class="text-info" style="width: 20%;">Apellido</th>
                        <th class="text-info" style="width: 40%;">Email</th>
                        <th class="text-info" style="width: 10%;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($estudiantes as $estudiante)
                        <tr>
                            <td class="text-info">{{$estudiante->rut}}</td>
                            <td class="text-info">{{$estudiante->nombre}}</td>
                            <td class="text-info">{{$estudiante->apellido}}</td>
                            <td class="text-info">{{$estudiante->email}}</td>
                            <td class="text-info">iconos edit,delete</td>
                        </tr>
                    @endforeach
                    
                    
                </tbody>
            </table>
        </div>
    </div>
    
    

    <!-- <input type="file" accept="application/pdf"> -->

    

    {{-- principal --}}
@endsection