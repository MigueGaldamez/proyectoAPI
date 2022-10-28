<x-app-layout>
    <x-slot name="header">
        {{ __('Padecimientos') }}
        <a href="{{route('padecimiento.agregar')}}" class="float-end btn btn-success bg-opacity-50 btn-sm">Agregar</a>
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-8 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                <table class="table table-success table-striped text-center">
                <thead class="rounded">
                    <tr >
                    <th scope="col" class="fw-bold">id</th>
                    <th scope="col" class="fw-bold">Tipo Tratamiento</th>
                    <th scope="col" class="fw-bold">Via Administracion</th>
                    <th scope="col" class="fw-bold">Creado</th>
                    <th scope="col" class="fw-bold">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                  
                    @foreach ($tipos as $tipo)
                    <tr>
                    <th scope="row">{{$tipo->id}}</th>
                    <td>{{$tipo->tipo_tratamiento}}</td>
                    <td>{{$tipo->via_administracion}}</td>
                    <td>
                       <p class="h6"><span class="badge bg-primary rounded-pill bg-opacity-50">{{$tipo->created_at}}</span></p> 
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
