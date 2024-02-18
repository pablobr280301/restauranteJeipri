<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Horario;

class ReservasUsuarioController extends Controller
{
    public function reservasUsuario(Request $request)
{
    $idUser = $request->query('idUser');

    if ($idUser) {
        $reservas = Reserva::where('idUser', $idUser)->get();
        return response()->json($reservas);
    } else {
        // Si no se proporciona el idUser en la URL, devuelve un mensaje de error
        return response()->json(['error' => 'Se requiere el parámetro idUser'], 400);
    }
}

public function eliminarReserva($id)
{
    try {
        $reserva = Reserva::findOrFail($id); // Buscar la reserva por su ID

        // Obtener el evento de horario asociado a esta reserva
        $horario = Horario::where('fecha', $reserva->fecha)
                          ->where('hora', $reserva->hora)
                          ->first();

        if ($horario) {
            // Marcar el evento como disponible nuevamente
            $horario->update(['disponible' => true]);
        } else {
            throw new \Exception('No se encontró el evento de horario asociado a esta reserva');
        }

        // Eliminar la reserva
        $reserva->delete();

        return response()->json(['message' => 'Reserva eliminada correctamente'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al eliminar la reserva: ' . $e->getMessage()], 500);
    }
}



}