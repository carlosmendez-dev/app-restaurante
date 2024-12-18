<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen bg-gray-100 flex fle justify-center items-center">

    <x-ui.card>
        <form action="" class="flex justify-center items-center flex-col gap-2 w-full">
            <h1 class="text-center text-xl">Menú de Usuario</h1> <br>
            <x-ui.btn-menu link="seleccionar-mesa"><i class="bi bi-file-person"></i> Empleado</x-ui.btnsucursal>
            <x-ui.btn-menu link="administrar"><i class="bi bi-gear"></i>Administrador</x-ui.btnsucursal>
        </form>
    </x-ui.card>
</html>