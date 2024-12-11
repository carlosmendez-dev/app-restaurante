<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
    <x-ui.btn-back atras="administrar-mesas"></x-ui>
    <x-ui.card>
        <form action="/actualizar-mesa" method="post" class="flex justify-center items-center flex-col gap-2 w-full">
            @csrf
            <input type="hidden" name="id" value="{{$mesa->id}}">
            <h1 class="text-center text-xl ">Editar Mesa</h1> <br>
            <input type="text" placeholder="Número" name="numero" class="w-full" value="{{$mesa->numero}}">
            <select name="disponible" id="" class="w-full" value="{{$mesa->disponible}}">
                <option value="0" {{$mesa->disponible==1 ? "selected" : ""}}>Ocupado</option>
                <option value="1" {{$mesa->disponible==1 ? "selected" : ""}}>Disponible</option>
            </select>
            <x-ui.btn>Aceptar</x-ui.btn>
        </form>
    </x-ui.card>
</body>
</html>