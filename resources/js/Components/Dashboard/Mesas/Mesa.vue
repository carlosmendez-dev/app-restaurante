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
        <div class="fixed w-screen h-screen left-0 top-0  bg-black bg-opacity-10 border flex justify-center items-center" v-if="verReservacion">
            
            <Transition name="slide-fade">
            <dialog open class="p-6 flex flex-col w-[800px] gap-2 rounded-xl shadow-2xl border" v-if="verReservacion">
                <!--Barra de titulo de ventana, titulo y boton de cerrar-->
                <div class="flex justify-between">
                        <h1 class="font-bold text-lg">Administrar Reservacion</h1>
                        <button @click="verReservacion=false" class="bg-gray-200 size-[30px] rounded-full"><i class="bi bi-x text-2xl"></i></button>
                </div>


                <p><i class="bi bi-person"></i> {{ props.mesa.comensal }}</p>
                
                
                <div class="flex">
                    
                    <div class="h-[500px] overflow-y-auto flex flex-col w-full p-3">
                        <h1>Buscar Platillos</h1>
                        <input type="text" placeholder="Buscar Plato" class="rounded border border-gray-200 shadow-md mb-3" v-model="pattern">
                        <div class="flex flex-col rounded-xl overflow-clip border">
                            <button class="bg-gray-100 hover:bg-gray-50 p-2 border-b flex justify-between" v-for="plato in resultado"><span><i class="bi bi-egg me-2"></i>{{ plato.nombre }}</span> <span class="text-green-600 font-bold">${{ plato.precio }}</span></button>
                        </div>
                    </div>
                    
                    <div class="h-[500px] overflow-y-auto flex flex-col w-full">
                        <h1>Pedidos</h1>
                    </div>
                </div>
                
                

                <div class="flex gap-2 justify-between">
                    <button class="bg-red-500 p-2 w-[50px] text-white rounded" @click="cancelar_reservacion"><i class="bi bi-trash"></i></button>
                    <button class="bg-blue-500 w-[350px] text-white p-2 rounded" @click="verReservacion=false">Pagar</button>
                </div>
            </dialog>
        </Transition>
            
        </div>

    <!--card mesa disponible-->
    <article class="p-3 shadow border w-[200px] rounded" v-if="props.mesa.disponible==true">

        <div class="bg-green-500 h-[120px] flex justify-center items-center rounded">
            <i class="bi bi-unlock text-white text-5xl"></i>
        </div>

        <p class="font-bold text-center text-lg uppercase">Mesa #{{ props.mesa.numero }}</p>
        <p class="text-center text-green-600 uppercase font-bold">disponible</p>
        <button class="bg-blue-500 text-white p-1 w-full rounded" @click="verModal=true">RESERVAR</button>

    </article>

    <!--card mesa ocupada-->
    <article class="p-3 shadow border w-[200px] rounded" v-if="props.mesa.disponible==false">

<div class="bg-yellow-500 h-[120px] flex justify-center items-center rounded">
    <i class="bi bi-lock text-white text-5xl"></i>
</div>

<p class="font-bold text-center text-lg uppercase">Mesa #{{ props.mesa.numero }}</p>
<p class="text-center text-green-600 uppercase font-bold">disponible</p>
<button class="bg-blue-500 text-white p-1 w-full rounded" @click="verReservacion=true">VER RESERVACION</button>

</article>
</template>



<style>
/*
  Enter and leave animations can use different
  durations and timing functions.
*/
.slide-fade-enter-active {
  transition: all 0.2s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.2s ease-in;
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: scale(0.1);
}
</style>