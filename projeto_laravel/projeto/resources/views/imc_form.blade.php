<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IMC</title>
    <link rel="stylesheet" href="/css/calculadoraImc.css">
</head>
<body>
    <div class="container">
        <h2>Calcule seu IMC</h2>
        <form action="/calcular" method="POST">
            @csrf
            <label>Peso (kg):</label>
            <input type="number" step="0.1" name="peso" required><br>

            <label>Altura (m):</label>
            <input type="number" step="0.01" name="altura" required><br>

            <button type="submit">Calcular</button>
    </form>

    </div>
</body>
</html>
