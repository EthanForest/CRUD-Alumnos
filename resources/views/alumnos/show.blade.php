<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Detalles del Alumno</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
        <div class="p-8">
            <h1 class="text-2xl font-semibold mb-6">Detalles del Alumno</h1>

            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Nombre:</strong>
                <p>{{ $alumno->nombre }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Correo:</strong>
                <p>{{ $alumno->correo }}</p>
            </div>

            <div class="mb-4">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Fecha de Nacimiento:</strong>
                <p>{{ $alumno->fecha_nacimiento }}</p>
            </div>

            <div class="mb-6">
                <strong class="block text-gray-700 text-sm font-bold mb-2">Ciudad:</strong>
                <p>{{ $alumno->ciudad }}</p>
            </div>

            <a href="{{ route('alumnos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Volver</a>
        </div>
    </div>
</body>
</html>