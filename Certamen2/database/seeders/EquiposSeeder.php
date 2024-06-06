<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipos')->insert([
            ['nombre'=>'Red Bull Racing', 'perfil' => 'Perfil del Equipo 1'],
            ['nombre'=>'Mercedes', 'perfil' => 'Perfil del Equipo 2'],
            ['nombre'=>'McLaren', 'perfil' => 'Perfil del Equipo 3'],

        ]);
    }
}
