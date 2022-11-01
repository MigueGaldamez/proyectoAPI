<x-app-layout>
    <x-slot name="header">
        {{ __('Registrar Veterinario') }}
        <a href="{{route('veterinario.agregar')}}" class="float-end btn btn-success bg-opacity-50 btn-sm me-auto">Regresar</a>
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-8 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mb-4">
                   
                       
                <span class="mb-5"><span class="badge bg-primary rounded-pill">1</span> Datos Necesarios</span>     
                <hr class="mt-2">
                    <form action="" method="post" action="{{ route('veterinario.guardar') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-4 g-5">
                            <div class="col col-3 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control rounded" id="nombre" name="nombre_veterinario" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-3 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Apellido:</label>
                                    <input type="text" class="form-control rounded" id="nombre" name="apellido_veterinario" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Numero Profesional:</label>
                                    <input type="text" class="form-control rounded" id="nombre" name="num_veterinario" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            
                           
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Telefono:</label>
                                    <input type="text" class="form-control rounded" id="telefono_veterinario" name="telefono_veterinario" aria-describedby="emailHelp">
                                 </div>
                            </div>
                         
                            <div class="col col-3 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Fecha Contratacion:</label>
                                    <input type="date" class="form-control rounded" id="fecha_contratacion" name="fecha_contratacion" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-3 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Fecha Nacimiento:</label>
                                    <input type="date" class="form-control rounded" id="fecha_nacimiento" name="fecha_nacimient" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-6 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Direccion:</label>
                                    <textarea type="text" class="form-control rounded" id="direccion_veterinario" name="direccion_veterinario" aria-describedby="emailHelp"></textarea>
                                 </div>
                            </div>
                          
                        </div>
                        <span class="mb-5"><span class="badge bg-primary rounded-pill">2</span> Acceso</span>     
                        <hr class="mt-2">
                       <div class="row">
                            <div class="col col-3 mt-3">
                                <div class="mb-3">
                                    <label for="especie" class="form-label">Usuario:</label>
                                    <input type="text" class="form-control rounded" id="nombre_usuario" name="nombre_usuario" aria-describedby="emailHelp">
                                 </div>
                            </div>
                            <div class="col col-3 mt-3">

                                <div class="mb-3">
                                        <label for="especie" class="form-label">Contraseña:</label>
                                        <input type="password" class="form-control rounded" id="clave" name="clave" aria-describedby="emailHelp">
                                    </div>
                                </div>
                                </div>
                                <div class="col mt-2">
                            <button class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                       </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
