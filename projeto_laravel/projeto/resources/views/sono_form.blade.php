<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação do Sono</title>
    <link rel="stylesheet" href="/css/sono.css">
</head>
<body>
    <div class="container">
        <h2>Avaliação do Sono</h2>
        <form action="{{ route('sono.avaliar') }}" method="POST">
            @csrf
            <label>Horas dormidas:</label>
            <input type="number" name="horas_sono" required><br>

            <button type="submit">Avaliar</button>
        </form>

        <a href="{{ route('home') }}" class="botao-home">←</a>
    </div>
</body>
</html>