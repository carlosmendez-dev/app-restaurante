<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
    <x-ui.btn-back atras="administrar-empleados"></x-ui> 
    <x-ui.card>
        <form action="" class="flex justify-center items-center flex-col gap-2 w-full">
            <h1 class="text-center text-xl ">Registrar Empleado</h1> <br>
            <input type="text" placeholder="Nombre" class="w-full">
            <input type="text" placeholder="Apellidos" class="w-full">
            <input type="text" placeholder="Teléfono" class="w-full">
            <input type="text" placeholder="Dirección" class="w-full">
            <input type="text" placeholder="Cargo" class="w-full">
            <x-ui.btn>Registrar Empleado</x-ui.btn>
        </form>
    </x-ui.card>
    
</body>
</html>