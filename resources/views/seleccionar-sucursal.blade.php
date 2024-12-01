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
        <h1 class="text-center text-xl" >Seleccionar Sucursal</h1> <br>
        <form action="" class="flex justify-center items-center flex-col gap-2">
            <x-ui.btnsucursal class="w-full"><i class="bi bi-shop"></i>Sucursal1</x-ui.btnsucursal>
            <x-ui.btnsucursal class="w-full"><i class="bi bi-shop"></i>Sucursal2</x-ui.btnsucursal>
            <x-ui.btnsucursal class="w-full"><i class="bi bi-shop"></i>Sucursal3</x-ui.btnsucursal>
        </form>
    </x-ui.card> 
</body>
</html>