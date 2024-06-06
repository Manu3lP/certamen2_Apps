<?php

// app/Models/Partido.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    protected $fillable = ['campeonato_id', 'fecha_hora', 'lugar'];

    public function campeonato()
    {
        return $this->belongsTo(Campeonato::class);
    }

    public function resultados()
    {
        return $this->hasMany(Resultado::class);
    }
}
