<script setup>
const props = defineProps({
    mesa:Object
})
</script>

<template>
    <article class="p-3 shadow border w-[200px]" v-if="props.mesa.disponible==true">

        <div class="bg-green-500 h-[120px] flex justify-center items-center">
            <i class="bi bi-unlock text-white text-3xl"></i>
        </div>

        <p class="font-bold text-center text-lg uppercase">Mesa #{{ props.mesa.numero }}</p>
        <p class="text-center text-green-600 uppercase font-bold">disponible</p>
        <button class="bg-blue-500 text-white p-1 w-full" @click="verModal=false">RESERVAR</button>

    </article>
</template>