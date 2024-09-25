<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votaciones Rey-Reina</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-purple-200">
    <div class="container mx-auto p-8 text-center">
        <h1 class="text-4xl font-bold text-purple-800 mb-8">Votaciones Rey-Reina</h1>
        
        <div class="relative bg-purple-300 p-8 rounded-xl flex justify-center items-center">
            <!-- Botón Anterior -->
            <button class="absolute left-4 bg-transparent text-4xl text-purple-800 hover:text-purple-600">&lt;</button>
            
            <!-- Tarjeta 1 -->
            <div class="bg-purple-400 border border-purple-800 p-6 mx-4 rounded-lg w-64">
                <h2 class="text-xl font-semibold text-purple-900 mb-2">Evento Número 1</h2>
                <p class="text-purple-900 mb-4">Esto es una muestra de ejemplo de un evento donde se vota a Rey y Reina</p>
                <button class="bg-gray-300 text-purple-900 py-2 px-4 rounded-lg hover:bg-gray-400">Ingresar</button>
            </div>

            <!-- Tarjeta 2 -->
            <div class="bg-purple-400 border border-purple-800 p-6 mx-4 rounded-lg w-64">
                <h2 class="text-xl font-semibold text-purple-900 mb-2">Evento Número 2</h2>
                <p class="text-purple-900 mb-4">Esto es una muestra de ejemplo de un evento donde se vota a Rey y Reina</p>
                <button class="bg-gray-300 text-purple-900 py-2 px-4 rounded-lg hover:bg-gray-400">Ingresar</button>
            </div>

            <!-- Tarjeta 3 -->
            <div class="bg-purple-400 border border-purple-800 p-6 mx-4 rounded-lg w-64">
                <h2 class="text-xl font-semibold text-purple-900 mb-2">Evento Número 3</h2>
                <p class="text-purple-900 mb-4">Esto es una muestra de ejemplo de un evento donde se vota a Rey y Reina</p>
                <button class="bg-gray-300 text-purple-900 py-2 px-4 rounded-lg hover:bg-gray-400">Ingresar</button>
            </div>

            <!-- Botón Siguiente -->
            <button class="absolute right-4 bg-transparent text-4xl text-purple-800 hover:text-purple-600">&gt;</button>
        </div>
    </div>
</body>
</html>