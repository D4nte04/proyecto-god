
@extends('templates/templates')

@section('principal')

    {{-- principal --}}


    <div class="row mt-3 mb-3">
        <div class="col-1 p-0"></div>
        <div class="col-2 p-0 text-info">
            <h3>Seleccione Profesor:</h3>
        </div>
        <div class="col-2 text-info ms-4 ps-2">
            <form action="" method="POST">
                @csrf
                <select class="form-control border-vanilla ms-5 w-5" name="profesor">
                    <option selected disabled>Seleccione el Profesor:</option>
                    @foreach ($profesores as $profesor)
                    <option value="{{$profesor->id}}">{{$profesor->nombre.' '.$profesor->apellido}}</option> 
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
    
