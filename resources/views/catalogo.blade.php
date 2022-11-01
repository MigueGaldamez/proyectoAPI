<x-app-layout>
    <x-slot name="header">
        {{ __('Tablas catalogo') }}
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-9xl mx-auto sm:px-8 lg:px-9">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                   Opciones:

                    
                </div>
            </div>
        </div>
    </div>
   <div class="container">
      <span> <span class="badge bg-primary rounded-pill">1</span> Importantes</span>
      <hr class="mt-2">
      <div class="row mt-3 mb-4">
        
        <div class="col">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Propietarios</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Tabla Catalogo</h6>
                <a href="{{route('propietario.listar')}}" class="text-primary text-decoration-underline">ir</a>
               
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Mascotas</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Tabla Catalogo</h6>
                <a href="{{route('mascota.listar')}}" class="text-primary text-decoration-underline">ir</a>
               
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Veterinarios</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Tabla Catalogo</h6>
                <a href="{{route('veterinario.listar')}}" class="text-primary text-decoration-underline">ir</a>
               
              </div>
            </div>
        </div>
      </div>
      <span><span class="badge bg-primary rounded-pill">2</span> Catalogo</span>
      <hr class="mt-2">
      <div class="row mt-3">
          <div class="col">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Especies</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Tabla Catalogo</h6>
                <a href="{{route('especie.listar')}}" class="text-primary text-decoration-underline">ir</a>
               
              </div>
            </div>
        </div>
        <div class="col">
            <div class="card" >
              <div class="card-body">
                <h5 class="card-title">Tipos de Tratamientos</h5>
                <h6 class="card-subtitle mb-2 text-muted ">Tabla Catalogo</h6>
                <a href="{{route('tipoTratamiento.listar')}}" class="text-primary text-decoration-underline">ir</a>
               
              </div>
            </div>
        </div>
      </div>
   </div>
</x-app-layout>
