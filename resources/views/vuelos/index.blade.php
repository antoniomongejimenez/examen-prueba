<x-layout>
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Vuelos</h1>
        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Código
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Origen
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Destino
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Compañia
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Salida
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            LLegada
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Plazas
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Precio
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Reservar
                        </th>

                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($vuelos as $vuelo)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <a href="/vuelos/{{ $vuelo->codigo }}" class="text-blue-800 hover:underline">
                                        {{ $vuelo->codigo }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <a href="/vuelos/{{ $vuelo->origen }}" class="text-blue-800 hover:underline">
                                        {{ $vuelo->origen }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <a href="/vuelos/{{ $vuelo->destino }}" class="text-blue-800 hover:underline">
                                        {{ $vuelo->destino }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <a href="/vuelos/{{ $vuelo->compania }}" class="text-blue-800 hover:underline">
                                        {{ $vuelo->compania }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <a href="/vuelos/{{ $vuelo->salida }}" class="text-blue-800 hover:underline">
                                        {{ $vuelo->salida }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <a href="/vuelos/{{ $vuelo->llegada }}" class="text-blue-800 hover:underline">
                                        {{ $vuelo->llegada }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <a href="/vuelos/{{ $vuelo->plazas }}" class="text-blue-800 hover:underline">
                                        {{ $vuelo->plazas }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    <a href="/vuelos/{{ $vuelo->precio }}" class="text-blue-800 hover:underline">
                                        {{ $vuelo->precio }}
                                    </a>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/vuelos/{{ $vuelo->id }}/edit"
                                    class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Reservar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
