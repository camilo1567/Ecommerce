<x-app-layout>

    <x-slot name="headerCategorias">
        <div class="uppercase text-xl text-gray-800 leading-tight flex justify-center items-center gap-2 overflow-hidden overflow-x-auto">
            @foreach ($categorias as $categoria)
                <a href="{{ route('inicio.productosPorCategoria',$categoria->id) }}">
                    {{ $categoria->nombre }}
                </a>
                <div>
                    |
                </div>
            @endforeach
        </div>
    </x-slot>

    <div class="bg-white py-2">

        <h1 class="text-center uppercase text-2xl font-bold mt-6 ">{{ $categoriaPrincipal->nombre }}</h1>
        <h2 class="text-center text-sm text-gray-600">{{ $categoriaPrincipal->descripcion }}</h2>

        <section class="px-20 mt-6">
            <h3 class="text-gray-800 font-medium text-xl mb-2">Productos</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($productos as $producto )
                    <!-- card para productos -->
                    <a href="{{ route('inicio.producto',$producto) }}">
                        <div class="bg-white shadow-lg p-2 rounded-lg mt-2">
                            <img class="mx-auto" src="{{ asset('img/productos/'.$producto->imagen) }}" alt="nombre producto">

                            <div class="font-sans">
                                <p class="font-medium text-gray-800 text-lg">{{ $producto->categoria->nombre }}</p>
                                <span class="text-sm text-gray-600">${{ $producto->precio }}</span>
                            </div>

                        </div>
                    </a>
                    <!-- fin card para productos -->
                @endforeach
            </div>


        </section>
    </div>


</x-app-layout>
