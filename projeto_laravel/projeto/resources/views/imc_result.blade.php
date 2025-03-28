<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado IMC</title>
    <link rel="stylesheet" href="/css/resultado.css">
</head>
<body>
    <div class="container">
        <h2>Resultado do Cálculo do IMC</h2>
        <p>Sua altura é <strong>{{ $altura }}m</strong> e seu peso é <strong>{{ $peso }}kg</strong>.</p>
        <p class="resultado">Seu IMC é: <strong>{{ number_format($imc, 2) }}</strong></p>

        @php
            $classeIMC = '';
            if ($imc < 18.5) $classeIMC = 'abaixo-peso';
            elseif ($imc < 24.9) $classeIMC = 'peso-normal';
            elseif ($imc < 29.9) $classeIMC = 'sobrepeso';
            elseif ($imc < 34.9) $classeIMC = 'obesidade1';
            elseif ($imc < 39.9) $classeIMC = 'obesidade2';
            else $classeIMC = 'obesidade3';
        @endphp

        <p class="alerta {{ $classeIMC }}"><strong>{{ $classificacao }}</strong></p>
        
        <a href="{{ route('imc.form') }}" class="botao">Calcular novamente</a>
    </div>
</body>
</html>
