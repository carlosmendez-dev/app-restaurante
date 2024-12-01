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
        <h1 class="text-center text-xl">Menú de Usuario</h1> <br>
        <form action="" class="flex justify-center items-center flex-col gap-2">
            <x-ui.btnsucursal><i class="bi bi-file-person-fill"></i> Empleado</x-ui.btnsucursal>
            <x-ui.btnsucursal><i class="bi bi-gear"></i>Administrador</x-ui.btnsucursal>
        </form>
    </x-ui.card>
</html>