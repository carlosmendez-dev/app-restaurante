<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen bg-gray-100 flex justify-center items-center">
<x-ui.btn-back atras="seleccionar-mesa"></x-ui>
    <x-ui.card>
        <!--Titulo de Card-->
        <h1 class="text-center text-xl">Lista de Productos</h1>

        <!--Lista de Compra-->
        <div class="bg-gray-100 min-h-[500px] max-h-[300px] w-[800px] flex flex-col gap-1 p-10 overflow-y-scroll">
            <x-ui.product-item precio="12.5"></x-ui.product.item>
            <x-ui.product-item precio="12.5"></x-ui.product.item>
            <x-ui.product-item precio="12.5"></x-ui.product.item>
            <x-ui.product-item precio="12.5"></x-ui.product.item>
            <x-ui.product-item precio="12.5"></x-ui.product.item>
            <x-ui.product-item precio="12.5"></x-ui.product.item>
            <x-ui.product-item precio="12.5"></x-ui.product.item>
        </div>
        
        <!--Boton realizar pago-->
        <x-ui.btn>
            <i class="bi bi-cash"></i>
            <span class="font-semibold">Realizar pago</span>
        </x-ui.btn>

    </x-ui.card>
</body>
</html>