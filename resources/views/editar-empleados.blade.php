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
        <form action="/actualizar-empleado" method="post" class="flex justify-center items-center flex-col gap-2 w-full">
            @csrf
            <input type="hidden" name="id" value="{{$empleado->id}}">
            <h1 class="text-center text-xl ">Editar Empleados</h1> <br>
            <input type="text" placeholder="Nombre" name="name" value="{{$empleado->name}}" class="w-full">
            <input type="text" placeholder="Correo" name="email" value="{{$empleado->email}}" class="w-full">
            <x-ui.btn>Aceptar</x-ui.btn>
        </form>
    </x-ui.card>
    
</body>
</html>