<?php

// app/Http/Controllers/PartidoController.php
namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use App\Http\Requests\PartidoRequest;

class PartidoController extends Controller
{
    public function index()
    {
        return Partido::all();
    }

    public function store(PartidoRequest $request)
    {
        $partido = new Partido();
        $partido->fecha_hora = $request->fecha_hora;
        $partido->lugar = $request->lugar;
        $partido->equipo_a = $request->equipo;
        $partido->equipo_b = $request->equipo;
        $partido->save();
        return $partido;
    }

    public function show(Partido $partido)
    {
    }

    public function update(Request $request, Partido $partido)
    {
        //
    }

    public function destroy(Partido $partido)
    {
        return $partido->delete();
    }
}
