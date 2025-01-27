<script setup>
// importar ref, sirve para crear variables reactivas
import {computed, onMounted, ref, watch} from "vue";
import { router } from "@inertiajs/vue3";


// componentes que usa dashboard
import Mesa from "@/Components/Dashboard/Mesas/Mesa.vue";

onMounted(()=>{
    console.log("reservaciones: ",props.reservaciones);
    props.platillos.forEach((plato)=>{
        console.log(plato.nombre);
    })
})

//obtener los datos que nos manda inertia
const props = defineProps({
    establecimientos:Array, // nombre de la variable y que es
    establecimiento_actual:Object,
    mesas:Array,
    reservaciones:Array,
    platillos:Array
})

async function cambiarEstablecimiento(){
router.patch(`/update/${sucursal.value}`);
}

// crear variables con ref
const vista = ref(0);
const sucursal = ref(2);

const verModal = ref(true);
</script>

<!--el template es como un body-->
<template>
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!--Dashboard-->
    <main class="flex w-screen h-screen bg-violet-500">
       
       
        <!--Modal seleccionar establecimiento-->
        <div class="fixed w-screen h-screen bg-black bg-opacity-25 flex justify-center items-center" v-if="verModal==true">
            
            <dialog open class="p-6 flex flex-col w-[400px] gap-2">
                <h1 class="font-bold text-lg">Seleccionar Sucursal</h1>
                <select name="" id="" v-model="sucursal" @change="cambiarEstablecimiento">
                    <option :value="establecimiento.id" v-for="establecimiento in props.establecimientos">{{ establecimiento.nombre }}</option>
                </select>
                <button class="bg-blue-500 text-white p-2" @click="verModal = false">Aceptar</button>
            </dialog>
            
        </div>

        <!--barra de navegacion-->
        <nav class="flex flex-col gap-3 bg-blue-500 w-[300px] p-3 text-white">
            <table class="text-left">
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Valor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Id</td> <td>{{ establecimiento_actual.id }}</td></tr>
                        <tr><td>Nombre</td> <td>{{ establecimiento_actual.nombre }}</td></tr>
                        <tr><td>Direccion</td> <td>{{ establecimiento_actual.direccion }}</td></tr>
                    </tbody>
                </table>
            <hr>

            <button @click="vista=0" class="text-left text-white font-bold text-lg border-gray-600"><i class="bi bi-archive me-2"></i>Restaurante</button>
            <button @click="vista=1" class="text-left text-white font-bold text-lg border-gray-600"><i class="bi bi-card-checklist me-2"></i>Tickets</button>
        </nav>

        <!--Contenido-->
        <div class="bg-white w-full">


            <!--Vista de mesas-->
            <section v-if="vista==0" class="flex flex-col">

                    <div class="flex">

                        <!--Mesas disponibles-->
                        <div class="w-full h-full">
                            <h1 class="font-bold text-lg text-center bg-slate-100">Mesas</h1>
                        <div class="flex justify-center items-center gap-2 flex-wrap border p-10">
                            <Mesa v-for="mesa in props.mesas" :mesa="mesa" :platillos="props.platillos"></Mesa>
                        </div>
                    </div>

                    <!--Mesas disponibles-->
                    <div class="w-full h-full">
                        <h1 class="font-bold text-lg text-center bg-slate-100">Reservaciones</h1>
                        <div class="flex justify-center items-center gap-2 flex-wrap border p-10">
                            <Mesa v-for="mesa in props.reservaciones" :mesa="mesa" :platillos="props.platillos"></Mesa>
                        </div>
                    </div>
                
                </div>
                
            </section>


            <section v-if="vista==1">estas en la lista de reservas</section>
            <section v-if="vista==2">estas en el crud de platillos</section>
        </div>

    </main>
</template>
