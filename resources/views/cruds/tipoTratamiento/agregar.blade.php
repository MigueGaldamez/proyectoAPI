<x-app-layout>
    <x-slot name="header">
        {{ __('Tipos de Tratamiento | Agregar') }}
        <a href="{{route('tipoTratamiento.listar')}}" class="float-end btn btn-success bg-opacity-50 btn-sm me-auto">Regresar</a>
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-8 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mb-4">
                <hr>
                    <form action="" method="post" action="{{ route('tipoTratamiento.guardar') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-4">
                            <div class="col">
                                <div class="mb-3">
                                <label for="tipo_tratamiento" class="form-label">Tipo tratamiento :</label>
                                <input type="text" class="form-control rounded" id="tipo_tratamiento" name="tipo_tratamiento" aria-describedby="emailHelp">
                            </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">via administración:</label>
                                    <textarea type="text" class="form-control rounded" id="via_administracion" name="via_administracion"></textarea>
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
