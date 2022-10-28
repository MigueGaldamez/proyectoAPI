<x-app-layout>
    <x-slot name="header">
        {{ __('Propietarios') }}
        <a href="{{route('propietario.agregar')}}" class="float-end btn btn-success bg-opacity-50 btn-sm">Agregar</a>
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-8 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                <table class="table table-success table-striped text-center">
                <thead class="rounded">
                    <tr >
                    <th scope="col" class="fw-bold">id</th>
                    <th scope="col" class="fw-bold">Nombre</th>
                    <th scope="col" class="fw-bold">Apellido</th>
                    <th scope="col" class="fw-bold">Telefono</th>
                    <th scope="col" class="fw-bold">Direccion</th>
                    <th scope="col" class="fw-bold">Correo</th>
                    <th scope="col" class="fw-bold">Fecha Registro</th>
                    <th scope="col" class="fw-bold">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach ($registros as $registro)
                    <tr>
                    <th scope="row">{{$registro->id}}</th>
                    <td>{{$registro->nombre_propietario}}</td>
                    <td>{{$registro->apellido_propietario}}</td>
                    <td>{{$registro->telefono_propietario}}</td>
                    <td>{{$registro->direccion_propietario }}</td>
                    <td>{{$registro->correo_propietario}}</td>
                    <td>
                       <p class="h6"><span class="badge bg-primary rounded-pill bg-opacity-50">{{$registro->created_at}}</span></p> 
                    </td>
                    <td>
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash-can"></i></button>
                        <button class="btn btn-sm btn-success"><i class="fa fa-pen"></i></button>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
