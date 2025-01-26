<script setup>
// importar ref, sirve para crear variables reactivas
import {ref} from "vue";


// componentes que usa dashboard
import Mesa from "@/Components/Dashboard/Mesas/Mesa.vue";

//obtener los datos que nos manda inertia
const props = defineProps({
    establecimientos:Array, // nombre de la variable y que es
    establecimiento_actual:Object,
    mesas:Array
})

// crear variables con ref
const vista = ref(0);
const sucursal = ref(null);

const verModal = ref(false);
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
                <select name="" id="" v-model="sucursal">
                    <option :value="establecimiento.nombre" v-for="establecimiento in props.establecimientos">{{ establecimiento.nombre }}</option>
                </select>
                <button class="bg-blue-500 text-white p-2" @click="verModal=false">Aceptar</button>
            </dialog>
            
        </div>

        <!--barra de navegacion-->
        <nav class="flex flex-col gap-3 bg-blue-500 w-[300px] p-3">
            <h1 class="text-white">SUCURSAL: {{ sucursal }}</h1>
            
            <hr>

            <button @click="vista=0" class="text-left text-white font-bold text-lg border-gray-600"><i class="bi bi-archive"></i> Mesas</button>
            <button @click="vista=1" class="text-left text-white font-bold text-lg border-gray-600"><i class="bi bi-card-checklist"></i> Reservaciones</button>
            
            <hr>

            <h3 class="font-bold text-white text-lg">CRUD</h3>
            <button @click="vista=2" class="text-left text-white font-bold text-lg border-gray-600"><i class="bi bi-cup-hot"></i> Platillos</button>
        </nav>

        <!--Contenido-->
        <div class="bg-white w-full">


            <!--Vista de mesas-->
            <section v-if="vista==0" class="flex flex-col">

                <table class="border w-[400px]">
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

                <div class="flex justify-center items-center gap-2">
                    <Mesa v-for="mesa in props.mesas" :mesa="mesa"></Mesa>
                </div>

            </section>


            <section v-if="vista==1">estas en la lista de reservas</section>
            <section v-if="vista==2">estas en el crud de platillos</section>
        </div>

    </main>
</template>
