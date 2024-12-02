<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Sucursal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
    <x-ui.card>
        <form action="" class="flex justify-center items-center flex-col gap-3 w-full">
            <h1 class="text-center text-xl">Realizar Pago</h1> <br>
            <div class="w-full flex flex-col gap-4">
                <label class="text-left">Total</label>
                <input type="text" placeholder="$150.00" class="w-full border border-gray-300 rounded px-2 py-1 ">
                <label class="text-left">Pago</label>
                <input type="text" placeholder="$500.00" class="w-full border border-gray-300 rounded px-2 py-1">
                <label class="text-left">Cambio</label>
                <input type="text" placeholder="$350.00" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
            <x-ui.btn>Pagar</x-ui.btn>
            <a href="#" class="text-sm text-blue-500 hover:underline mt-3">Cancelar</a>
        </form>
    </x-ui.card>
</body>
</html>