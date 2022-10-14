<x-layout title="Temporadas de {{ $series->name }}">

    <ul class="list-group">
        @foreach ($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('episodes.index', $season->id) }}"> Temporada {{ $season->number }}</a>

                @auth
                    <span class="badge bg-secondary">
                        {{ $season->getWatchedEpisodes() }} / {{ $season->episodes->count() }}
                    </span>
                @endauth
            </li>
        @endforeach
    </ul>
</x-layout>