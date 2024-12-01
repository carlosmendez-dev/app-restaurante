<div class="bg-white border shadow-md w-[200px] p-5 flex flex-col gap-3 h-[230px] rounded-lg">
    <h1 class="text-xl font-bold text-center">Mesa {{ $mesa }}</h1>

    @if ($ocupado == 'false')
        <div class="w-full h-20 bg-green-500 flex justify-center items-center rounded-lg">
            <i class="bi bi-unlock text-4xl text-white"></i>
        </div>
        <h4 class="text-green-600 font-extrabold text-center">DISPONIBLE</h4>
        <button class="bg-blue-500 hover:bg-blue-400 active:bg-blue-600 text-white px-4 py-2 rounded-lg">
            RESERVAR
        </button>
    @else
        <div class="w-full h-20 bg-red-500 flex justify-center items-center rounded-lg">
            <i class="bi bi-lock text-4xl text-white"></i>
        </div>
        <h4 class="text-red-600 font-extrabold text-center">OCUPADO</h4>
        <button class="bg-gray-400 text-white px-4 py-2 rounded-lg cursor-not-allowed" disabled>
            RESERVAR
        </button>
    @endif
</div>
