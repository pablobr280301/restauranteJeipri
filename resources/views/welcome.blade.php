 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Japonés</title>

    <!-- Enlace a Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="background-color: #8f1616;" class="text-white">

    <header class="bg-8f1616 text-white text-center py-4">
        <h1 class="text-2xl">Tubuki restaurante</h1>
        <p>Bocados de Japón</p>
    </header>

    <nav class="bg-8f1616 py-4 text-center">
        <button class="transition duration-400 bg-black text-white h-10">
            <a href="{{ url('reservar') }}">RESERVAR</a>
        </button>
    </nav>

    <main class="p-4">
        <h2 class="text-2xl text-center mb-4">Bienvenido a Tubuki nuestro restaurante japonés</h2>
        <p>¡Descubre la auténtica esencia de Japón en nuestro restaurante japonés! Deléitate con una exquisita fusión de sabores tradicionales y modernos, preparados por chefs expertos. Sumérgete en un ambiente elegante y acogedor que refleja la cultura japonesa. Desde sushi fresco y sashimi hasta platillos calientes como ramen y tempura, cada bocado es una experiencia única. Bienvenido a un rincón de Japón en cada plato.</p>
        <img src="{{ asset('imagenes/sushi1.jpg') }}" class="h-48 mx-auto mt-4" > 
        <img src="{{ asset('imagenes/ramen1.jpg') }}" class="h-48 mx-auto mt-4" > 
    </main>

    <footer class="bg-8f1616 text-white text-center py-4 fixed bottom-0 w-full">
        <p>&copy; 2024 Restaurante Japonés</p>  
    </footer>

</body>
</html>
