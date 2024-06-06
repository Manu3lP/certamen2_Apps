<?php

namespace App\Http\Controllers;

use App\Models\Jugador;
use Illuminate\Http\Request;
use App\Http\Requests\JugadorRequest;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Piloto::all();
        return Jugador::all()->load('equipo')->makeHidden('equipo_id');
        // return Piloto::orderBy('apellido')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JugadorRequest $request)
    {
        $piloto = new Jugador();
        $piloto->nombre = $request->nombre;
        $piloto->apellido = $request->apellido;
        $piloto->pais = $request->pais;
        $piloto->juego = $request->juego;
        $piloto->equipo_id = $request->equipo;
        $piloto->save();
        return $piloto;
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jugador $jugador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        return $jugador->delete();
    }
}
