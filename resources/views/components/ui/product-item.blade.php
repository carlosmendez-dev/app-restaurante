            <!--componente de lista-->
            <div class="flex justify-between bg-white shadow border p-2 gap-5 w-full product-item" x-data="{precio:{{$precio}},cantidad:2}">
                <input type="hidden" :value="precio*cantidad">
                <div class="flex gap-3">
                    <img class="size-[50px]"  src="https://cdn.pixabay.com/photo/2022/02/18/18/53/breakfast-7021320_640.jpg" alt="">
                    
                    <div class="flex flex-col">
                        <h2 class="font-bold">Nombre del producto</h2>
                        <h1 class="text-gray-600 text-xl">$<span x-text="precio"></span></h1>
                    </div>        
                </div>

      
                <div class="flex">

                    <div class="flex gap-2 items-center">
                        <i class="bi bi-basket"></i><span>x</span>
                        <input type="number" class="w-[80px] text-center bg-gray-50" x-model="cantidad" min=0 max=50>
                        <h1 class="text-green-500 flex justify-center items-center text-xl w-[80px] font-bold" x-text="'$' + precio*cantidad"></h1>
                    </div>
                    <button @click="$el.parentNode.parentNode.remove()"  title="Eliminar de la lista" class="bg-red-500 w-[50px] text-white flex justify-center items-center"><i class="bi bi-trash text-xl"></i></button>
                </div>
            </div>