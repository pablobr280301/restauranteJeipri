<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Reserva;
use App\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class FormularioController extends Controller
{
    public function index(Request $request, $fecha, $hora){
        return view('confirmarReserva')->with(['fecha'=>$fecha, 'hora'=>$hora]);
    }

    

    public function mostrarCrud() {
        $datos = Reserva::all();
        return view('tusReservas')->with("datos" , $datos);
        

    }

      
    public function mesapillada(Request $request){ 
        $fecha = $request->input('fecha');
        $hora = $request->input('hora');
        $num = $request->input('num');
        $nombre = $request->input('nombre');
        $id_User = $request->input('idUser');
        $menu = $request->input('menu');
        
    
    
        Reserva::create([
            "fecha"=> $fecha,
            "hora"=> $hora,
            "num_comensales"=> $num,
            "idMenu"=> $menu,
            "nombre"=> $nombre,
            "idUser"=> $id_User,
            "created_at" => now(),
            "updated_at" => now(),
            
        ]);
    
        DB::table('horario')->where('fecha', $fecha)->where('hora', $hora)->update(['disponible' => false]);
        return response()->json(['message' => 'Reserva creada con éxito'], 200);
    }
    


}

