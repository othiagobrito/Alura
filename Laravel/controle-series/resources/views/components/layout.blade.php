<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Series Control</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="{{ route('series.index') }}" class="navbar-brand">Home</a>
            
            <span>
                @guest
                    <a href="{{ route('login') }}" class="">Login</a>
                    <a href="{{ route('users.index') }}" class="">Sign Up</a>
                @endguest

                @auth
                    <a href="{{ route('logout') }}" class="">Logout</a>
                @endauth
            </span>
        </div>
    </nav>

    <div class="container">
        <h1>{{ $title }}:</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div id="msg" class="alert alert-success d-flex justify-content-between align-items-center">{{ session('success') }} <button class="btn" onclick="closeMsg()">X</button></div>
        @endif

        @if (session('fail'))
            <div id="msg" class="alert alert-danger d-flex justify-content-between align-items-center">{{ session('fail') }} <button class="btn" onclick="closeMsg()">X</button></div>
        @endif
        
        {{ $slot }}
    </div>

    <script>
        function closeMsg() {
            document.getElementById('msg').style.cssText = 'display: none !important;';
        }
    </script>
</body>
</html>