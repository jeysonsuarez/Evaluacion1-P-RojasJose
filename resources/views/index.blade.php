
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca - Laravel 12</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
 <p class="text-center mt-6 text-gray-100 text-sm">@Jorge Tovar</p>
<body class="bg-gray-100 p-10">

    <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-4">
            📚 Listado de Libros
        </h1>


        <table class="w-full text-left">
            <thead>
                <tr class="bg-gray-800 text-white text-sm">
                    <th class="p-3">Título</th>
                    <th class="p-3 text-center">Páginas</th>
                    <th class="p-3 text-center">Disponible</th>
                    <th class="p-3 text-center">Publicado</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($libros as $libro)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="p-3 font-medium">{{ $libro->titulo }}</td>

                        <td class="p-3 text-center">{{ $libro->paginas }}</td>

                        <td class="p-3 text-center">
                            <span class="px-2 py-1 rounded text-xs font-bold
                                {{ $libro->disponible ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                {{ $libro->disponible ? 'Disponible' : 'No Disponible' }}
                            </span>
                        </td>

                        <td class="p-3 text-center">
                            {{ \Carbon\Carbon::parse($libro->publicado)->format('d/m/Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="p-10 text-center text-red-500 font-bold">
                            No se encontraron registros en el sistema.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

<br><br><br><br><br>
    <p class="text-center mt-6 text-gray-200 text-sm">@Jorge Tovar</p>

</body>
</html>
