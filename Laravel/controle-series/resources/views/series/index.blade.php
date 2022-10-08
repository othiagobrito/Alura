<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @if (session('success'))
        <div id="msg" class="alert alert-success d-flex justify-content-between align-items-center">{{ session('success') }} <button class="btn" onclick="closeMsg()">X</button></div>
    @endif

    @if (session('fail'))
        <div id="msg" class="alert alert-danger d-flex justify-content-between align-items-center">{{ session('fail') }} <button class="btn" onclick="closeMsg()">X</button></div>
    @endif

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->name }}

                <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </li>
        @endforeach
    </ul>

    <script>
        function closeMsg() {
            document.getElementById('msg').style.cssText = 'display: none !important;';
        }
    </script>
</x-layout>