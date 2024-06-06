<?php

// app/Models/Resultado.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    protected $fillable = [
        'partido_id', 'equipo_ganador_id', 'equipo_perdedor_id', 'puntos_ganador', 'puntos_perdedor'
    ];

    public function partido()
    {
        return $this->belongsTo(Partido::class);
    }
}
