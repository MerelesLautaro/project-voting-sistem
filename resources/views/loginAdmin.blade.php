<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    @vite('resources/css/app.css')
    <style>
        .custom-shape {
            clip-path: ellipse(75% 60% at 50% 40%);
        }
    </style>
</head>
<body class="relative bg-purple-200 min-h-screen flex items-center justify-center">

    <!-- Fondo ondulado con degradado -->
    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-purple-300 via-purple-200 to-purple-100 custom-shape"></div>

    <!-- Contenido del formulario -->
    <div class="relative z-10 bg-white p-8 rounded-3xl shadow-lg w-full max-w-sm">

        <!-- Selector de usuario -->
        <div class="mb-4">
            <label for="userType" class="block text-gray-700 text-sm font-bold mb-2">Usuario</label>
            <select id="userType" class="w-full bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 rounded-lg focus:outline-none focus:border-purple-500">
                <option>Administrador</option>
                <option>Usuario</option>
            </select>
        </div>

        <!-- Campo de correo -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo</label>
            <input type="email" id="email" placeholder="Ingresar correo" class="w-full bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 rounded-lg focus:outline-none focus:border-purple-500">
        </div>

        <!-- Campo de contraseña -->
        <div class="mb-6">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Contraseña</label>
            <input type="password" id="password" placeholder="Ingresar contraseña" class="w-full bg-gray-100 border border-gray-300 text-gray-700 py-2 px-4 rounded-lg focus:outline-none focus:border-purple-500">
        </div>

        <!-- Botón de inicio de sesión -->
        <div class="mb-4">
            <button class="w-full bg-purple-500 hover:bg-purple-600 text-white py-2 px-4 rounded-lg">Iniciar sesión</button>
        </div>

        <!-- Enlace de recuperación de contraseña -->
        <div class="text-center">
            <a href="#" class="text-sm text-purple-500 hover:underline">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</body>
</html>