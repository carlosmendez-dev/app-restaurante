<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 h-screen flex justify-center items-center">
<x-ui.btn-back atras="menu"></x-ui>
<x-ui.card>

    <div class="flex flex-col">
        <!-- Título del card -->
        <h1 class="text-3xl font-bold text-center mb-6">Seleccionar Mesa</h1>
        <!-- Lista de mesas en formato horizontal y centrado -->
        <div class="flex justify-center items-center gap-5 flex-wrap">
            <x-ui.card-mesa mesa="1" ocupado="false"></x-ui.card-mesa>
            <x-ui.card-mesa mesa="2" ocupado="true"></x-ui.card-mesa>
            <x-ui.card-mesa mesa="3" ocupado="true"></x-ui.card-mesa>
            <x-ui.card-mesa mesa="4" ocupado="false"></x-ui.card-mesa>
            <x-ui.card-mesa mesa="5" ocupado="false"></x-ui.card-mesa>
            <x-ui.card-mesa mesa="6" ocupado="true"></x-ui.card-mesa>
        </div>
    </div>
    
</x-ui.card>


</body>
</html>
