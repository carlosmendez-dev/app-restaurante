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

        <input type="search" list="data">
        <datalist id="data">
        <option value="Pizza">1</option>
<option value="Torta">2</option>
<option value="Quesadilla">3</option>
<option value="Hamburguesa">4</option>
<option value="Tacos">5</option>
<option value="Enchiladas">6</option>
<option value="Burritos">7</option>
<option value="Sushi">8</option>
<option value="Spaghetti">9</option>
<option value="Paella">10</option>
<option value="Ceviche">11</option>
<option value="Tamales">12</option>
<option value="Pozole">13</option>
<option value="Fajitas">14</option>
<option value="Chiles en Nogada">15</option>
<option value="Sopes">16</option>
<option value="Croissant">17</option>
<option value="Falafel">18</option>
<option value="Ramen">19</option>
<option value="Goulash">20</option>

        </datalist>
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
        <form action="/unlock-table/" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$id}}">
            <button class=" text-red-400 border border-red-400 text-center w-full p-1">Cancelar</a>
        </form>

    </x-ui.card>
</body>
</html>