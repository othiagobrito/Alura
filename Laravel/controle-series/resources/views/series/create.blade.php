<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" autofocus value="{{ old('name') }}">
            </div>

            <div class="col-2">
                <label for="seasons" class="form-label">Nº de Temporadas:</label>
                <input type="text" id="seasons" name="seasons" class="form-control" value="{{ old('seasons') }}">
            </div>

            <div class="col-2">
                <label for="episodes" class="form-label">Episódios / temporada:</label>
                <input type="text" id="episodes" name="episodes" class="form-control" value="{{ old('episodes') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>