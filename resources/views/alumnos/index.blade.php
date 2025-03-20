<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Lista de Alumnos</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-8">
        <h1 class="text-3xl font-semibold mb-6 text-center">Administración de Alumnos</h1>
            <h2 class="text-2xl font-semibold mb-6">Lista de Alumnos</h2>

            <div class="mb-6">
                <a href="{{ route('alumnos.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Alumno</a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border border-gray-200 p-3 text-left">Nombre</th>
                            <th class="border border-gray-200 p-3 text-left">Correo</th>
                            <th class="border border-gray-200 p-3 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($alumnos as $alumno)
                        <tr class="border border-gray-200">
                            <td class="p-3">{{ $alumno->nombre }}</td>
                            <td class="p-3">{{ $alumno->correo }}</td>
                            <td class="p-3 text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('alumnos.show', $alumno->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded">Ver</a>
                                    <a href="{{ route('alumnos.edit', $alumno->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded">Editar</a>
                                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>