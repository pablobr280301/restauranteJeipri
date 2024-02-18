<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante - Reservar Mesa</title>
</head>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          events:@json($eventos), 
        });
        calendar.render();
      });
    </script>
<body>
    <div id='calendar'></div>
    @vite(['resources/js/app.js'])

    <button onclick="window.location.href='http://localhost:8080/restauranteJeipri/public/'">Ir a la Página Principal</button>
  </body>
</html>