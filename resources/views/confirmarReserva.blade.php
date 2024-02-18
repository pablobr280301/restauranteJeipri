<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restaurante - Formulario de Contacto</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
</head>

<body class="bg-gray-100">

    <div class="max-w-md mx-auto p-6 bg-white rounded-md shadow-md">
        <form action="{{route('confirmarReserva.SendMail')}}" method="get" id="formulario1">
            <div class="mb-4">
                <label for="nombre" class="block text-gray-600 text-sm font-semibold mb-2">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="asunto" class="block text-gray-600 text-sm font-semibold mb-2">Asunto:</label>
                <input type="text" name="asunto" id="asunto" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-semibold mb-2">Email:</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="mensaje" class="block text-gray-600 text-sm font-semibold mb-2">Mensaje:</label>
                <input type="text" name="mensaje" id="mensaje" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="num" class="block text-gray-600 text-sm font-semibold mb-2">Numero de Comensales:</label>
                <input type="number" name="num" id="num" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="mb-4">
                <label for="menu" class="block text-gray-600 text-sm font-semibold mb-2">Menú:</label>
                <input type="number" name="menu" id="menu" class="w-full px-4 py-2 border rounded-md">
            </div>

            <input type="text" name="fecha" id="fecha" value="{{$fecha}}" hidden>
            <input type="text" name="hora" id="hora" value="{{$hora}}" hidden>

            <b>Fecha:
                @isset($fecha)
                {{$fecha}}
                @endisset
                <br>Hora:
                @isset($hora)
                {{$hora}}
                @endisset
            </b>
            <br><br>
            <input type="submit" value="Confirmar Reserva" id="enviar" class="bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
        </form><br>
    </div>

    <script src="{{ asset('js/eventos.js') }}"></script>

</body>

</html>
