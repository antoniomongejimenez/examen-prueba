@csrf
<div class="hidden">
    <div class="mb-6">
        <label for="codigo"
            class="text-sm font-medium text-gray-900 block mb-2 @error('codigo') text-red-500 @enderror">
            Codigo
        </label>
        <input type="text" name="codigo" id="codigo"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('codigo') border-red-500 @enderror"
            value="{{ old('codigo', $vuelo->codigo) }}">
        @error('codigo')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="origen"
            class="text-sm font-medium text-gray-900 block mb-2 @error('origen') text-red-500 @enderror">
            Origen
        </label>
        <input type="text" name="origen" id="origen"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('origen') border-red-500 @enderror"
            value="{{ old('origen', $vuelo->origen_id) }}">
        @error('origen')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="destino"
            class="text-sm font-medium text-gray-900 block mb-2 @error('destino') text-red-500 @enderror">
        Destino
        </label>
        <input type="text" name="destino" id="destino"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('destino') border-red-500 @enderror"
            value="{{ old('destino', $vuelo->destino_id) }}">
        @error('destino')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="codigo"
            class="text-sm font-medium text-gray-900 block mb-2 @error('codigo') text-red-500 @enderror">
            Compañia
        </label>
        <input type="text" name="codigo" id="codigo"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('compania_id') border-red-500 @enderror"
            value="{{ old('destino', $vuelo->compania_id) }}">
        @error('nombre')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="salida"
            class="text-sm font-medium text-gray-900 block mb-2 @error('salida') text-red-500 @enderror">
            Salida
        </label>
        <input type="text" name="salida" id="salida"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('salida') border-red-500 @enderror"
            value="{{ old('salida', $vuelo->salida) }}">
        @error('salida')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="llegada"
            class="text-sm font-medium text-gray-900 block mb-2 @error('codigo') text-red-500 @enderror">
            Llegada
        </label>
        <input type="text" name="llegada" id="llegada"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('llegada') border-red-500 @enderror"
            value="{{ old('llegada', $vuelo->llegada) }}">
        @error('llegada')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="plazas"
            class="text-sm font-medium text-gray-900 block mb-2 @error('plazas') text-red-500 @enderror">
            Plazas
        </label>
        <input type="text" name="plazas" id="plazas"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('plazas') border-red-500 @enderror"
            value="{{ old('plazas', $vuelo->plazas) }}">
        @error('plazas')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label for="precio"
            class="text-sm font-medium text-gray-900 block mb-2 @error('precio') text-red-500 @enderror">
            Precio
        </label>
        <input type="text" name="precio" id="precio"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('precio') border-red-500 @enderror"
            value="{{ old('precio', $vuelo->precio) }}">
        @error('precio')
            <p class="text-red-500 text-sm mt-1">
                {{ $message }}
            </p>
        @enderror
    </div>
</div>
<button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Confirmar</button>
<a href="/vuelos"
    class="text-white border-green-700 border-2 bg-green-700 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Volver</a>
