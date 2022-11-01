<?php

namespace App\Http\Controllers;

use App\Models\Veterinario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registros = Veterinario::all();
       
        return view('cruds.veterinario.listar',compact('registros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $registro = new Usuario();
        $registro->nombre_usuario= $request->nombre_usuario;
        $registro->clave= $request->clave;
        $registro->save();
        $registro2 = new Veterinario();
        $registro2->id_usuario= $registro->id;
        
        $registro2->num_veterinario= $request->num_veterinario;
        $registro2->nombre_veterinario= $request->nombre_veterinario;
        $registro2->apellido_veterinario= $request->apellido_veterinario;
        $registro2->fecha_nacimient= $request->fecha_nacimient;
        
        $registro2->save();
        return redirect()->route('veterinario.listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veterinario  $veterinario
     * @return \Illuminate\Http\Response
     */
    public function show(Veterinario $veterinario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veterinario  $veterinario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Veterinario $veterinario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veterinario  $veterinario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Veterinario $veterinario)
    {
        //
    }
    public function agregar()
    {
        return view('cruds.veterinario.agregar');
    }
}
