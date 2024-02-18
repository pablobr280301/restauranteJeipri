<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // Importa la clase base correcta
use App\Models\Horario;
use Illuminate\Http\Request;

class ReservaPruebaController extends Controller
{
    function index(){
        $horarios = Horario::all();
        $eventos = [];
        foreach ($horarios as $evento) {
            if ($evento->disponible == 1) {
                 $eventos[] = [
                    'title'=> $evento->hora,
                    'start'=> $evento->fecha,
                    //'url'=> "/restauranteJeipri/public/confirmarReserva/".$evento->fecha."/".$evento->hora
                ];
            }    
        }
        return view('reservar',compact("eventos"));
    }

    function mostrarEventos(){
        $horarios = Horario::all();
        $eventos = [];
        foreach ($horarios as $evento) {
            if ($evento->disponible == 1) {
                 $eventos[] = [
                    'title'=> $evento->hora,
                    'start'=> $evento->fecha,
                    //'url'=> "/restauranteJeipri/public/confirmarReserva/".$evento->fecha."/".$evento->hora
                ];
            }    
        }
        return response()->json($eventos);
    }
}
