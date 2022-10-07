<x-layout title="Séries">
    <a href="{{ route('series.create') }}">Adicionar Série</a>

    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>