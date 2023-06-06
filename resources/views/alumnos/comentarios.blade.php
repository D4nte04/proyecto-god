
@extends('templates/templates')

@section('principal')
<div class="row mt-5 mb-3">
    <div class="col-1 p-0"></div>
    <div class="col-10 p-0 text-info">
        <h3>Comentarios de la Propuesta</h3>
    </div>
</div>
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
<div class="row mt-5">
    <div class="col-1"></div>
    <div class="col-10 p-0">
        <table class="table table-bordered table-tabla border-vanilla table-striped">
            <tbody>
                
                <tr>
                    <td class="text-info w-25">Estado de la entrega</td>
                    <td class="text-info">
                        --
                        {{-- No entregado --}}
                    </td>
                </tr>
                <tr>
                    <td class="text-info">Documento</td>
                    <td class="text-info">
                        {{-- @foreach($propuestas as $propuesta)
                        <a href="{{$propuesta->documento}}">
                            DOCUMENTO GOD
                        </a> 
                        @endforeach  --}}
                        --
                        
                    </td>
                </tr>
                <tr>
                    <td class="text-info">Ultima modificacion</td>
                    <td class="text-info">--</td>
                </tr>
                <tr>
                    <td class="text-info">Comentarios Profesor</td>
                    <td class="text-info">--</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection