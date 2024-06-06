<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampeonatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('campeonatos')->insert([
            ['nombre' => 'Campeonato 1',
            'detalles' => 'Detalles del Campeonato 1',
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => '2024-01-31',
            'reglas' => 'Reglas del Campeonato 1',
            'premios' => 'Premios del Campeonato 1'],
            ['nombre' => 'Campeonato 2',
            'detalles' => 'Detalles del Campeonato 2',
            'fecha_inicio' => '2024-02-01',
            'fecha_fin' => '2024-02-28',
            'reglas' => 'Reglas del Campeonato 2',
            'premios' => 'Premios del Campeonato 2'
            ],
        ]);
    }
}
