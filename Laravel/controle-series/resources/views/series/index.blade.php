<x-layout title="Séries">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @if (session('success'))
        <div id="msg" class="alert alert-success d-flex justify-content-between align-items-center">{{ session('success') }} <button class="btn" onclick="closeMsg()">X</button></div>
    @endif

    @if (session('fail'))
        <div id="msg" class="alert alert-danger d-flex justify-content-between align-items-center">{{ session('fail') }} <button class="btn" onclick="closeMsg()">X</button></div>
    @endif

    <ul class="list-group">
        @foreach ($series as $series)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $series->name }}

                <span class="d-flex">
                    <a href="{{ route('series.edit', $series->id) }}"><button class="btn btn-primary btn-sm"><ion-icon name="pencil-sharp"></ion-icon></button></a>
                    
                    <form action="{{ route('series.destroy', $series->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        
                        <button class="btn btn-danger btn-sm"><ion-icon name="trash-sharp"></ion-icon></button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>

    <script>
        function closeMsg() {
            document.getElementById('msg').style.cssText = 'display: none !important;';
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</x-layout>