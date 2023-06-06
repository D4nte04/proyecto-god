
@extends('templates/templates')

@section('principal')

    {{-- principal --}}


    <div class="row mt-3 mb-3">
        <div class="col-1 p-0"></div>
        <div class="col-2 p-0 text-info">
            <h3>Bienvenid@:</h3>
        </div>
        <div class="col-2 text-info ms-4 ps-2">
                <select class="form-control border-vanilla ms-5 w-5" name="profesor">
                    <option selected disabled value="{{$profesor->id}}">{{$profesor->nombre.' '.$profesor->apellido}}</option> 
        
                </select>
        </div>
        <div class="col-2" style="margin-left:70px">
                <a href="{{route('profesores.index')}}" class="btn btn-dark text-white me-1 fw-bold" type="submit" style="width: 110px;">Volver</a>
        </div>
             
    </div>  
    <div class="row mt-3 mb-3">
        <div class="col-1 p-0"></div>
        <div class="col-2 p-0 text-info">
            <h3>Seleccione al alumno:</h3>
        </div>
        <div class="col-2 text-info ms-4 ps-2">
            <form action="" method="POST">
                @csrf
                <select class="form-control border-vanilla ms-5 w-5" name="alumno">
                    <option selected disabled>Seleccione propuesta del alumno</option>
                    @foreach ($estudiantes as $estudiante)
                    <option value="{{$estudiante->rut}}">{{$estudiante->nombre.' '.$estudiante->apellido}}</option> 
                    @endforeach
                </select>
        </div>
        <div class="col-2" style="margin-left:70px">
                <button class="btn btn-dark text-white me-1 fw-bold" type="submit" style="width: 110px;">Acceder</button>
            </form>
        </div>
    </div>




    <!-- <input type="file" accept="application/pdf"> -->


    {{-- principal --}}
@endsection