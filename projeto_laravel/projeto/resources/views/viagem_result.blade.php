<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Viagem</title>
    <link rel="stylesheet" href="/css/resultado.css">
</head>
<body>
    <div class="container">
        <h2>Resultado do Cálculo de Viagem</h2>
        <p>Distância: <strong>{{ $distancia }} km</strong></p>
        <p>Consumo do veículo: <strong>{{ $consumo }} km/L</strong></p>
        <p>Preço do litro da gasolina: <strong>R$ {{ number_format($preco, 2, ',', '.') }}</strong></p>
        <p class="resultado">Custo total estimado: <strong>R$ {{ $gastoTotal }}</strong></p>
        <a href="/viagem" class="botao">Calcular novamente</a>
    </div>
</body>
</html>
