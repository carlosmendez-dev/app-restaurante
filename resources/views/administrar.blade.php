<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 h-screen flex justify-center items-center">
<x-ui.card>
    <form action="" class="flex justify-center items-center flex-col gap-2 w-full">
            <h1 class="text-center text-xl" >Menú de Administración</h1> <br>
            <x-ui.btn-menu link="administrar-mesas"><i class="bi bi-file"></i>Mesas</x-ui.btn-menu>
            <x-ui.btn-menu link="administrar-platos"><i class="bi bi-cup-straw"></i>Platos</x-ui.btn-menu>
            <x-ui.btn-menu link="administrar-establecimientos"><i class="bi bi-shop"></i>Establecimientos</x-ui.btn-menu>
            <x-ui.btn-menu link="administrar-empleados"><i class="bi bi-person-vcard"></i>Empleados</x-ui.btn-menu>
            <x-ui.btn-menu link="administrar-clientes"><i class="bi bi-pin-fill"></i>Clientes</x-ui.btn-menu>
        </form>
    </x-ui.card> 
</body>
</html>