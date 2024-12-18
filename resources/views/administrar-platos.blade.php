<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
<x-ui.btn-add add="registrar-platos">Agregar Platos</x-ui>
<x-ui.btn-back atras="administrar"></x-ui>
    <x-ui.card>
        <table class="">
            <thead>
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Precio</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>                   
                 <tr>
                     @foreach($platos a plato)
                        <td class="border border-gray-300 px-4 py-2 text-left"></td>
                        <td class="border border-gray-300 px-4 py-2 text-left"></td>
                        <td class="border border-gray-300 px-4 py-2 text-left"></td>
                        <td class="border border-gray-300 px-4 py-2 text-left">
                            <!-- Botón de Editar -->

                            <form action="editar-platos" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$plato->id}}">
                                <button class="border border-yellow-500 px-2 py-1 text text-left"><i class="bi bi-pencil-square text-yellow-500"></i></a>
                            </form>

                            <form action="eliminar-plato">
                                <button type="submit" class="border border-red-500 px-2 py-1 text-left"><i class="bi bi-trash3 text-red-500"></i></button>
                            </form>
                            </div>
                        </td>
                    @endforeach
                    </tr>

            </tbody>
        </table>
    </x-ui.card>
    
</body>
</html>