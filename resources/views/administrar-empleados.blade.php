<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
<x-ui.btn-add add="registrar-empleados">Agregar Empleados</x-ui>
<x-ui.btn-back atras="administrar"></x-ui>
    <x-ui.card>
        <h1>Administrar Empleados</h1>
        <table class="">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>       
                @foreach($empleados as $empleado)            
                 <tr>
                        <td class="border border-gray-300 px-4 py-2 text-left">{{$empleado->id}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-left">{{$empleado->name}}</td>
                        <td class="border border-gray-300 px-4 py-2 text-left">
                            <!-- Botón de Editar -->

                            <div class="flex gap-2 ">
                            <a href="editar-empleados" class="border border-yellow-500 px-2 py-1 text text-left"><i class="bi bi-pencil-square text-yellow-500"></i></a>

                            <form action="">

                                <button type="submit" class="border border-red-500 px-2 py-1 text-left"><i class="bi bi-trash3 text-red-500"></i></button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </x-ui.card>
    
</body>
</html>