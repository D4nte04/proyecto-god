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
    <div class="row mt-3 mb-3">
        <div class="col-6 text-info ms-4 ps-2">
            <form action="" method="POST">
                @csrf
                <div class="row">                                                                                                                                                                                                 ">
                    <div class="col- ms-5">
                        <label for="alumno">Eliga la propuesta del alumno:</label>
                        <select class="form-control border-vanilla" name="alumno">
        
                            @foreach ($estudiantes as $estudiante)
                                @foreach ($propuestas as $prop)
                                    @if($estudiante->rut == $prop->estudiante_rut)
                                        <option @if($prop->estudiante_rut == $estudiante->rut) selected @endif value="{{$estudiante->rut}}">{{$estudiante->nombre.' '.$estudiante->apellido}}</option>
                                    @endif
                            @endforeach
                            
                             
                            @endforeach
                        </select>
                    </div>
                </div>
        </div>
        <div class="col-2" style="margin-left:70px">
                <button class="btn btn-dark text-white me-1 fw-bold" type="submit" style="width: 110px;">Acceder</button>
            </form>
        </div>
        <div class="row mt-5">
            <div class="col-1"></div>
            <div class="col-10 p-0">
                <table class="table table-bordered table-tabla border-vanilla table-striped">
                    <thead>
                        <tr>
                            <th class="">Propuesta</th>
                            <th>Fecha Entrega</th>
                            <th class="d-flex justify-content-center">Comentarios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr> 
                            <td class="text-info ">
                                <a href="{{$prop->documento}}">
                                    {{$prop->id}}
                                </a>
                            </td>
                            <td class="text-info">{{$prop->fecha}}</td>
                            <td class="text-info">
                                <form method="POST"  action="">
                                    @csrf
                                    <textarea placeholder="Retroalimentsación" rows="4" cols="50" name="comentarios" class="form-control">
                                        </textarea>

                                </form>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
                
    </div>      



    <!-- <input type="file" accept="application/pdf"> -->


    {{-- principal --}}
@endsection