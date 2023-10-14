<x-app-layout>


    <section class="p-12">
        <div class="md:flex md:justify-between items-center md:flex-1 px-20">
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('img/1.png') }}"  alt="imagen">
            </div>

            <div class="w-full md:w-1/2 text-center">
                <h1 class="text-2xl mt-2 md:text-6xl uppercase leading-none text-black font-oswald mb-6">Ofertas especiales</h1>
                <p class="text-md md:text-xl uppercase mb-5">estrena las mejores prendas</p>
                <div class="flex justify-center">
                    <a href="#" class="btn-black uppercase">informacion</a>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white py-2">
        <section class="px-20 mt-6">
            <h3 class="text-gray-800 font-medium text-xl mb-2">Productos</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach (range(1,10) as $item )
                    <!-- card para productos -->
                    <div class="bg-white rounded-lg shadow-lg p-3 relative">
                        <img class="mx-auto" src="{{ asset('img/1.png') }}" alt="nombre producto">

                        <div class="flex justify-between gap-3 my-3">
                            <p class="font-medium text-gray-800">Buzo Casual</p>
                            <div class="flex flex-col items-end">
                                <strong class="text-blue-600">7800</strong>
                                <strike class="text-gray-400">8000</strike>
                            </div>
                        </div>

                        <div class="flex justify-between items-center mb-2">
                            <div class="flex gap-1">
                                <span style="background-color: #acacac" class="w-5 h-5 rounded-full">&nbsp;</span>
                                <span style="background-color: #cc00ff" class="w-5 h-5 rounded-full">&nbsp;</span>
                                <span style="background-color: #0048a7" class="w-5 h-5 rounded-full">&nbsp;</span>
                            </div>

                            <div class="flex gap-1 text-gray-400 text-sm">
                                <span class="flex justify-center w-5 h-5 rounded-full border border-gray-400" >S</span>
                                <span class="flex justify-center w-5 h-5 rounded-full border border-gray-400" >M</span>
                                <span class="flex justify-center w-5 h-5 rounded-full border border-gray-400" >L</span>
                            </div>

                        </div>

                        <div class="flex justify-between items-center">
                            <span class="flex items-center gap-1 text-gray-400 ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                                </svg>
                                4.5
                            </span>
                            <span class="flex items-center gap-1 text-blue-600 font-bold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart-plus text-2xl" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                    <path d="M12.5 17h-6.5v-14h-2"></path>
                                    <path d="M6 5l14 1l-.86 6.017m-2.64 .983h-10.5"></path>
                                    <path d="M16 19h6"></path>
                                    <path d="M19 16v6"></path>
                                 </svg>
                                Comprar
                            </span>
                        </div>

                        <div class="absolute top-2 left-3 right-3 flex justify-between items-center">
                            <span class="bg-red-500 text-white rounded px-2 text-xs">25% Off</span>
                            <span class="bg-white shadow-md rounded-full w-7 h-7 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-xl icon icon-tabler icon-tabler-heart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                 </svg>
                            </span>
                        </div>

                    </div>
                    <!-- fin card para productos -->
                @endforeach
            </div>


        </section>
    </div>


</x-app-layout>
