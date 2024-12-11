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
        <form action="/mesas" method="post" class="flex justify-center items-center flex-col gap-2 w-full">
            @csrf
            <h1 class="text-center text-xl ">Registrar Mesa</h1> <br>
            <input type="text" placeholder="Número" name="numero" class="w-full">
            <x-ui.btn>Registrar Mesa</x-ui.btn>
        </form>
    </x-ui.card>
</body>
</html>