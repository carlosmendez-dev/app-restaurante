<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
    <x-ui.btn-back atras="administrar-establecimiento"></x-ui>
    <x-ui.card>
        <form action="/actualizar-establecimientos" method="POST" class="flex justify-center items-center flex-col gap-2 w-full">
            @csrf
            <input type="hidden" name="id" value="{{$establecimiento->id}}">
            <h1 class="text-center text-xl ">Editar Establecimiento</h1> <br>
            <input type="text" placeholder="Nombre"  name="Nombre" class="w-full" value="{{$establecimiento->id}}">
            <input type="text" placeholder="Telefono" name="telefono" class="w-full" value="{{$establecimiento->id}}">
            <input type="text" placeholder="Dirección" name="Direcion" class="w-full" value="{{$establecimiento->id}}"+>
            <x-ui.btn>Aceptar</x-ui.btn>
        </form>
    </x-ui.card>
</body>
</html>