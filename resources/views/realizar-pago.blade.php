<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar pago</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen bg-gray-100 flex justify-center items-center">
    <x-ui.card>
        <form action="" class="flex justify-center items-center flex-col gap-3 w-full" x-data="{pago:10, total:150}">
            <h1 class="text-center text-xl">Realizar Pago</h1> <br>
            <div class="w-full flex flex-col gap-4">
                <label class="text-left">Total</label>
                <input type="text" :value="total" class="w-full border border-gray-300 rounded px-2 py-1" disabled>
                <label class="text-left">Pago</label>
                <input type="text"  x-model="pago" class="w-full border border-gray-300 rounded px-2 py-1">
                <p x-show="pago < total" class="text-red-500">falta money</p>
                <label class="text-left">Cambio</label>
                <input type="text" :value="pago - total" class="w-full border border-gray-300 rounded px-2 py-1">
            </div>
            <div x-show="pago >= total" class="w-full">
             <x-ui.btn>Pagar</x-ui.btn>
            </div>
            <a href="#" class="text-sm text-blue-500 hover:underline mt-3">Cancelar</a>
        </form>
    </x-ui.card>
</body>
</html>