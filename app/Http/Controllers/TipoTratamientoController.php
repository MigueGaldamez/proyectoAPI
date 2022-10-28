<?php

namespace App\Http\Controllers;

use App\Models\TipoTratamiento;
use Illuminate\Http\Request;

class TipoTratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TipoTratamiento::all();
        return view('cruds.tipoTratamiento.tipoTratamiento',compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new TipoTratamiento();
        $tipo->tipo_tratamiento = $request->tipo_tratamiento;
        $tipo->via_administracion = $request->via_administracion;
        $tipo->save();
        return redirect()->route('tipoTratamiento.listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoTratamiento  $tipoTratamiento
     * @return \Illuminate\Http\Response
     */
    public function show(TipoTratamiento $tipoTratamiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoTratamiento  $tipoTratamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoTratamiento $tipoTratamiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoTratamiento  $tipoTratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoTratamiento $tipoTratamiento)
    {
        //
    }
}
