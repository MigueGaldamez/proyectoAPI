<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Propietario;
use App\Models\Especie;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $registros = Mascota::all();
       
        return view('cruds.mascota.listar',compact('registros'));
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
       
        $registro = new Mascota();
        $registro->nombre= $request->nombre;
        $registro->id_especie = $request->id_especie;
        $registro->id_propietario = $request->id_propietario;
        $registro->sexo = $request->sexo;
        $registro->color = $request->color;
        $registro->raza = $request->raza;
        $registro->fecha_nacimiento = $request->fecha_nacimiento;
        $registro->peso = $request->peso;
        if(!$request->esterilizado){
            $registro->esterilizado = false;
        }else{
            $registro->esterilizado = $request->esterilizado;
        }
        $registro->save();
        return redirect()->route('mascota.listar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        //
    }
    public function agregar()
    {
        //
        $propietarios = Propietario::all();
        $especie = Especie::all();
        return view('cruds.mascota.agregar',compact('propietarios','especie'));

    }
}
