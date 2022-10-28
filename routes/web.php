<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoTratamientoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\EspecieController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//Tipo Tratamiento
Route::get('/tipoTratamiento/crud', [TipoTratamientoController::class,'index'])->name('tipoTratamiento.listar');;
Route::post('/tipoTratamiento/crud/agregar', [TipoTratamientoController::class,'store'])->name('tipoTratamiento.guardar');
Route::get('/tipoTratamiento/crud/agregar', function () {
    return view('cruds.tipoTratamiento.agregar');
})->name('tipoTratamiento.agregar');

//propietarios
Route::get('/propietario/crud', [PropietarioController::class,'index'])->name('propietario.listar');;
Route::post('/propietario/crud/agregar', [PropietarioController::class,'store'])->name('propietario.guardar');
Route::get('/propietario/crud/agregar', function () {
    return view('cruds.propietario.agregar');
})->name('propietario.agregar');

//Especie
Route::get('/especie/crud', [EspecieController::class,'index'])->name('especie.listar');;
Route::post('/especie/crud/agregar', [EspecieController::class,'store'])->name('especie.guardar');
Route::get('/especie/crud/agregar', function () {
    return view('cruds.especie.agregar');
})->name('especie.agregar');

//Padecimiento
Route::get('/padecimiento/crud', [TipoTratamientoController::class,'index'])->name('padecimiento.listar');;
Route::post('/padecimiento/crud/agregar', [TipoTratamientoController::class,'store'])->name('padecimiento.guardar');
Route::get('/padecimiento/crud/agregar', function () {
    return view('cruds.padecimiento.agregar');
})->name('padecimiento.agregar');


Route::get('/catalogos', function () {
    return view('catalogo');
})->name('catalogos');
