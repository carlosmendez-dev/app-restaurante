<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 h-screen flex justify-center items-center">

<div class="bg-white border shadow-lg rounded-lg p-6    max-w-[70%] w-full md:max-w-[1200px]">
    <!-- Título del card -->
    <h1 class="text-3xl font-bold text-center mb-6">Estado de Mesas</h1>

    <!-- Lista de mesas en formato horizontal y centrado -->
    <div class="flex justify-center gap-5 overflow-x-auto">
        <x-ui.card-mesa mesa="1" ocupado="false"></x-ui.card-mesa>
        <x-ui.card-mesa mesa="2" ocupado="true"></x-ui.card-mesa>
        <x-ui.card-mesa mesa="3" ocupado="true"></x-ui.card-mesa>
        <x-ui.card-mesa mesa="4" ocupado="false"></x-ui.card-mesa>
        <x-ui.card-mesa mesa="5" ocupado="false"></x-ui.card-mesa>
        <x-ui.card-mesa mesa="6" ocupado="true"></x-ui.card-mesa>
    </div>
</div>

</body>
</html>