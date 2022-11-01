<x-app-layout>
    <x-slot name="header">
        {{ __('Registrar Mascota') }}
        <a href="{{route('mascota.agregar')}}" class="float-end btn btn-success bg-opacity-50 btn-sm me-auto">Regresar</a>
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-8 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mb-4">
                   
                       
                <span class="mb-5"><span class="badge bg-primary rounded-pill">1</span> Datos Necesarios</span>     
                <hr class="mt-2">
                    <form action="" method="post" action="{{ route('especie.guardar') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-4 g-5">
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control rounded" id="nombre" name="nombre" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Propietario:</label>
                                    <select class="form-select" aria-label="Default select example"  name="id_propietario">
                                        <option selected>Seleccione</option>
                                        @foreach ($propietarios as $registro)
                                            <option value="{{$registro->id}}">{{$registro->nombre_propietario}} {{$registro->apellido_propietario}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Especie:</label>
                                    <select class="form-select" aria-label="Default select example" name="id_especie">
                                        <option selected>Seleccione</option>
                                        @foreach ($especie as $registro)
                                            <option value="{{$registro->id}}">{{$registro->especie}}</option>
                                        @endforeach
                                    </select>
                                 </div>
                            </div>
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Sexo:</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="0">
                                            <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="1">
                                            <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                        </div>
                                 </div>
                            </div>
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Raza:</label>
                                    <input type="text" class="form-control rounded" id="raza" name="raza" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Color:</label>
                                    <input type="text" class="form-control rounded" id="color" name="color" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Fecha Nacimiento:</label>
                                    <input type="date" class="form-control rounded" id="fecha_nacimiento" name="fecha_nacimiento" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-3 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Peso:</label>
                                    <input type="number" class="form-control rounded" id="peso" name="peso" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-3 mt-3">
                                <div class="mb-3">
                                    <div class="form-check mt-4">
                                        <input class="form-check-input" type="checkbox" id="esterilizado" value="true" name="esterilizado">
                                        <label class="form-check-label" for="inlineCheckbox1">Esterilizado</label>
                                    </div>
                                 </div>
                            </div>
                        </div>
                        <div class="col mt-2">
                            <button class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
