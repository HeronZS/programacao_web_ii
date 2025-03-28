<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Avaliação de Sono</title>
    <link rel="stylesheet" href="/css/resultado.css">
</head>
<body>
    <div class="container">
        <h2>Resultado da Avaliação de Sono</h2>
        <p>Você dormiu <strong>{{ $horas_dormidas }} horas</strong>.</p>
        <p class="resultado {{ $classeSono }}">{{ $classificacao }}</p>

        <a href="/sono" class="botao">Avaliar novamente</a>
    </div>
</body>
</html>
