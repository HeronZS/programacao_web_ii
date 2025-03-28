<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Gasto de Viagem</title>
    <link rel="stylesheet" href="/css/viagem.css">
</head>
<body>
    <div class="container">
        <h2>Calcule o Gasto da sua Viagem</h2>
        <form action="{{ route('viagem.calcular') }}" method="POST">
            @csrf
            <label>Distância (km):</label>
            <input type="number" name="distancia" required><br>

            <label>Consumo do veículo (km/l):</label>
            <input type="number" step="0.1" name="consumo" required><br>

            <label>Preço do combustível (R$/l):</label>
            <input type="number" step="0.01" name="preco" required><br>

            <button type="submit">Calcular</button>
        </form>

        <a href="{{ route('home') }}" class="botao-home">←</a>
    </div>
</body>
</html>
