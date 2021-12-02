<x-layout>
    <form action="{{ route('vuelos.update', $vuelo->id, false) }}" method="POST">
        @method('PUT')
        <x-vuelos.form
            :vuelo="$vuelo" />
    </form>
</x-layout>
