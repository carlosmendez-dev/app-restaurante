<script setup>
import { computed, ref } from 'vue';
import { router } from '@inertiajs/vue3';

const props = defineProps({
    mesa:Object,
    platillos:Array
})

const comensal = ref("");

function reservar_mesa(){
    router.post("/reservar/",{
        id:props.mesa.id,
        comensal:comensal.value
    });
    verModal.value = false;
}

function cancelar_reservacion(){
    router.post("cancelar-reservacion",{
        id:props.mesa.id,
    })
    verReservacion.value = false;
}

const verModal = ref(false);
const verReservacion = ref(false);
const pattern = ref("");

const resultado = computed(()=>{
    return props.platillos.filter(plato => plato.nombre.toLowerCase().includes(pattern.value.toLowerCase()));
})

</script>

<template>
           <!--Modal seleccionar establecimiento-->
           <div class="fixed w-screen h-screen left-0 top-0  bg-black bg-opacity-25 flex justify-center items-center" v-if="verModal==true">
            
            <dialog open class="p-6 flex flex-col w-[400px] gap-2">
                <h1 class="font-bold text-lg">Nombre de comensal</h1>
                <input type="text" v-model="comensal">
                <button class="bg-blue-500 text-white p-2" @click="reservar_mesa">Aceptar</button>
            </dialog>
            
        </div>

        <!--Modal Reservacion-->
        <div class="fixed w-screen h-screen left-0 top-0  bg-black bg-opacity-25 flex justify-center items-center" v-if="verReservacion">
            
            <dialog open class="p-6 flex flex-col w-[800px] gap-2">
                <h1 class="font-bold text-lg">Reservacion</h1>
                <p><i class="bi bi-person"></i> {{ props.mesa.comensal }}</p>
                
                
                <div class="flex">
                    
                    <div class="h-[500px] overflow-y-auto flex flex-col w-full">
                        <h1>Buscar Platillos</h1>
                        <input type="text" placeholder="Buscar Plato" v-model="pattern">
                        <button class="border-b flex justify-between" v-for="plato in resultado"><span><i class="bi bi-search me-2"></i>{{ plato.nombre }}</span> <span class="text-green-600 font-bold">${{ plato.precio }}</span></button>
                    </div>
                    
                    <div class="h-[500px] overflow-y-auto flex flex-col w-full">
                        <h1>Pedidos</h1>
                    </div>
                </div>



                <div class="flex gap-2">
                    <button class="bg-red-500 p-2 w-[100px] text-white" @click="cancelar_reservacion"><i class="bi bi-trash"></i></button>
                    <button class="bg-gray-200 text-black p-2 w-full" @click="verReservacion=false">Ocultar</button>
                    <button class="bg-green-500 text-white p-2 w-full" @click="verReservacion=false">Pagar</button>
                </div>
            </dialog>
            
        </div>

    <!--card mesa disponible-->
    <article class="p-3 shadow border w-[200px]" v-if="props.mesa.disponible==true">

        <div class="bg-green-500 h-[120px] flex justify-center items-center">
            <i class="bi bi-unlock text-white text-3xl"></i>
        </div>

        <p class="font-bold text-center text-lg uppercase">Mesa #{{ props.mesa.numero }}</p>
        <p class="text-center text-green-600 uppercase font-bold">disponible</p>
        <button class="bg-blue-500 text-white p-1 w-full" @click="verModal=true">RESERVAR</button>

    </article>

    <!--card mesa ocupada-->
    <article class="p-3 shadow border w-[200px]" v-if="props.mesa.disponible==false">

<div class="bg-yellow-500 h-[120px] flex justify-center items-center">
    <i class="bi bi-lock text-white text-3xl"></i>
</div>

<p class="font-bold text-center text-lg uppercase">Mesa #{{ props.mesa.numero }}</p>
<p class="text-center text-green-600 uppercase font-bold">disponible</p>
<button class="bg-blue-500 text-white p-1 w-full" @click="verReservacion=true">VER RESERVACION</button>

</article>
</template>