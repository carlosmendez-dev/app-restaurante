<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 h-screen flex justify-center items-center">
    <x-ui.btn-back atras="menu"></x-ui>
<x-ui.card>
    <div>
        @foreach($platos as $plato)
        <form action="/agregar-detalle" method="post" class="flex justify-center items-center flex-col gap-2 w-full">
            <input type="hidden" name="venta" value="{{$venta}}">
            <input type="hidden" name="id" value="{{$plato->id}}">
            <h1>{{$plato->nombre}}</h1>
            <input type="hidden" name="plato_id" value="{{$plato->id}}">
            <input type="hidden" name="mesa_id" value="{{$id}}">
            <x-ui.btn>Agregar</x-ui.btn>
            </form>
        @endforeach
    </div>
        </x-ui.card> 
</body>
</html>