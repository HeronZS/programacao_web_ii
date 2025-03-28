<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação de Saúde e Viagem</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>
        <p>Escolha uma funcionalidade:</p>
        <ul>
            <li><a href="{{ route('imc.form') }}">Calcular IMC</a></li>
            <li><a href="{{ route('sono.form') }}">Avaliar Sono</a></li>
            <li><a href="{{ route('viagem.form') }}">Calcular Gasto de Viagem</a></li>
        </ul>
    </div>
</body>
</html>
