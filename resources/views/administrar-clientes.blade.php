<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
    <x-ui.btn-back atras="administrar"></x-ui>
    <x-ui.card>
        <form action="" class="flex justify-center items-center flex-col gap-2 w-full">
            <h1 class="text-center text-xl ">No se que poner</h1> <br>
            <x-ui.btn>No se que poner</x-ui.btn>
        </form>
    </x-ui.card>
</body>
</html>