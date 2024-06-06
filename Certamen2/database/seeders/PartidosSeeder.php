<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partidos')->insert([
            ['campeonato_id' => 1, 'fecha_hora' => '2024-01-15 10:00:00', 'lugar' => 'Estadio 1'],
            ['campeonato_id' => 2, 'fecha_hora' => '2024-02-15 15:00:00', 'lugar' => 'Estadio 2'],
        ]);
    }
}
