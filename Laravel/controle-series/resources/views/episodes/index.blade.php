<x-layout title="Episódios">

    <form method="POST">
        @csrf

        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episode {{ $episode->number }}

                    @auth
                        <input type="checkbox" name="episodes[]" value="{{ $episode->id }}" @if ($episode->watched) checked @endif>
                    @endauth
                </li>
            @endforeach
        </ul>

        @auth
            <button class="btn btn-primary mt-2 mb-2">Salvar</button>
        @endauth
    </form>
</x-layout>