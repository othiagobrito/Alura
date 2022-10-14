<x-layout title="Update Series '{{ $series->name }}'">
    <form action="{{ route('series.update', $series) }}" method="POST">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $series->name }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-layout>