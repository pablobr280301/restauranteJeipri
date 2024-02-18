@extends('layouts.app') {{-- Ajusta esto según la estructura de tu layout --}}

@section('content')
    <h1>Tus Reservas</h1>

    @if(count($datos) > 0
    
        <ul>
            @foreach($datos as $reserva)
                <li>
                    Fecha: {{ $reserva->fecha }}, Hora: {{ $reserva->hora }}, Num. Comensales: {{ $reserva->num_comensales }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay reservas disponibles.</p>
    @endif
@endsection
