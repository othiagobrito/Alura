<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Séries</title>
</head>
<body>
    <h1>Séries:</h1>

    <ul>
        @foreach ($series as $serie)
            <li>{{ $serie }}</li>
        @endforeach
    </ul>
</body>
</html>