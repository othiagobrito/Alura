<x-layout title="Episódios">

    @if (session('success'))
        <div id="msg" class="alert alert-success d-flex justify-content-between align-items-center">{{ session('success') }} <button class="btn" onclick="closeMsg()">X</button></div>
    @endif

    @if (session('fail'))
        <div id="msg" class="alert alert-danger d-flex justify-content-between align-items-center">{{ session('fail') }} <button class="btn" onclick="closeMsg()">X</button></div>
    @endif
    
    <form method="POST">
        @csrf

        <ul class="list-group">
            @foreach ($episodes as $episode)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Episode {{ $episode->number }}

                    <input type="checkbox" name="episodes[]" value="{{ $episode->id }}" @if ($episode->watched) checked @endif>
                </li>
            @endforeach
        </ul>

        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>

    <script>
        function closeMsg() {
            document.getElementById('msg').style.cssText = 'display: none !important;';
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</x-layout>