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
        $jugador = new Jugador();
        $jugador->nombre = $request->nombre;
        $jugador->apellido = $request->apellido;
        $jugador->pais = $request->pais;
        $jugador->juego = $request->juego;
        $jugador->equipo_id = $request->equipo;
        $jugador->save();
        return $jugador;
    }

    /**
     * Display the specified resource.
     */
    public function show(Jugador $jugador)
    {
        return $jugador->load('equipo');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JugadorRequest $request, Jugador $jugador)
    {
        $jugador->nombre = $request->nombre;
        $jugador->apellido = $request->apellido;
        $jugador->pais = $request->pais;
        $jugador->juego = $request->juego;
        $jugador->equipo_id = $request->equipo;
        $jugador->save();

        // Mensaje de éxito
        return 'El jugador se ha actualizado correctamente.';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jugador $jugador)
    {
        return $jugador->delete();
    }
}
