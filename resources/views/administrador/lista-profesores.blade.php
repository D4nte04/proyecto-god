
@extends('templates/templates')

@section('principal')

    {{-- principal --}}
    <div class="row mt-4">
        <div class="col-8 p-0 text-info">
            <h4 class="ps-5">Lista de Profesores</h4>
        </div>
    </div>
    <div class="row mt-2">
        
        <div class="col mx-5 px-0">
            <table class="table table-bordered table-tabla border-vanilla table-striped">
                <thead>
                    <tr>
                        <th class="text-info" style="width: 10%;">#</th>
                        <th class="text-info" style="width: 20%;">Nombre</th>
                        <th class="text-info" style="width: 20%;">Apellido</th>
                        <th class="text-info" style="width: 40%;">Email</th>
                        <th class="text-info" style="width: 10%;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profesores as $num=>$profesor)
                        <tr>
                            <td class="text-info">{{$num+1}}</td>
                            <td class="text-info">{{$profesor->nombre}}</td>
                            <td class="text-info">{{$profesor->apellido}}</td>
                            <td class="text-info">{{$profesor->email}}</td>
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