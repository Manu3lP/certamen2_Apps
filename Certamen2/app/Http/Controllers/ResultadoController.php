<?php

// app/Http/Controllers/ResultadoController.php
namespace App\Http\Controllers;

use App\Models\Resultado;
use Illuminate\Http\Request;
use App\Http\Requests\ResultadoRequest;


class ResultadoController extends Controller
{
    public function index()
    {
        return Resultado::all();
    }

    public function store(ResultadoRequest $request)
    {
        $resultado = new Resultado();
        $resultado->partido_id = $request->partido_id;
        $resultado->equipo_perdedor = $request->nombre;
        $resultado->equipo_ganador = $request->nombre;
        $resultado->puntos_ganador = $request->puntos_ganador;
        $resultado->puntos_perdedor = $request->puntos_perdedor;
        $resultado->save();
        return $resultado;
    }

    public function show(Resultado $resultado)
    {
    }

    public function update(Request $request, Resultado $resultado)
    {
        //
    }

    public function destroy(Resultado $resultado)
    {
        return $resultado->delete();
    }
}