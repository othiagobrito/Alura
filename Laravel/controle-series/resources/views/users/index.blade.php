<x-layout title="Register">
    <form method="post">
        @csrf

        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-primary mt-3">Registrar</button>

        <a href="{{ route('login') }}" class="btn btn-secondary mt-3">Login</a>
    </form>
</x-layout>