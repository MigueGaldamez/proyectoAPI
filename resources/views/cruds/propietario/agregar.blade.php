<x-app-layout>
    <x-slot name="header">
        {{ __('Registrar Propietario') }}
        <a href="{{route('especie.listar')}}" class="float-end btn btn-success bg-opacity-50 btn-sm me-auto">Regresar</a>
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-8 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mb-4">
                   
                       
                <span class="mb-5"><span class="badge bg-primary rounded-pill">1</span> Datos Necesarios</span>     
                <hr class="mt-2">
                    <form action="" method="post" action="{{ route('especie.guardar') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-4">
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control rounded" id="especie" name="especie" aria-describedby="emailHelp">
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
