<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seleccionar-sucursal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
    <x-ui.card>
        <form action="/lock-table" method="post" class="flex justify-center items-center flex-col gap-2 w-full">
            @csrf
            <h1 class="text-center text-xl ">Reservar Mesa</h1> <br>
            <input type="hidden" name="id" value="{{$id}}">
            <input type="text" placeholder="Nombre" class="w-full">
            <x-ui.btn>Registrar</x-ui.btn>
        </form>
    </x-ui.card>
</body>
</html>