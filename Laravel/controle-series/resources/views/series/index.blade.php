<x-layout title="Series">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Add</a>

    <ul class="list-group">
        @foreach ($series as $series)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('seasons.index', $series->id) }}">
                    {{ $series->name }}
                </a>

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
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</x-layout>