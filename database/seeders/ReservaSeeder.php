<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReservaSeeder extends Seeder{
    public function run()
    {
        $fechas = [
            '2024-01-01', '2024-01-02', '2024-01-03', '2024-01-04', '2024-01-05',
            '2024-01-01', '2024-01-09', '2024-01-10', '2024-01-11', '2024-01-12',
        ];

        $horas = [
            '13:00:00', '13:15:00', '13:30:00', '13:45:00', '14:00:00',
            '14:15:00', '14:30:00', '20:00:00', '20:15:00', '20:30:00',
        ];

        for ($i = 0; $i < 5; $i++) {
            //fecha y hora aleatoria 
            $fecha = $fechas[array_rand($fechas)];
            $hora = $horas[array_rand($horas)];
            $idMenu = $this->idMenuRandom();
            DB::table('reserva')->insert([
                'fecha' => $fecha,
                'hora' => $hora,
                'num_comensales' => 4,
                'idMenu' => $idMenu,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
    private function idMenuRandom(){
        //obtiene una id de la tabla menu
        return DB::table('menu')->inRandomOrder()->value('id');
    }
}

