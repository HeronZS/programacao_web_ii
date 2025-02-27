<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { max-width: 400px; }
        label, input, textarea { display: block; margin-bottom: 10px; width: 100%; }
    </style>
</head>
<body>
    <h2>Formulário</h2>
    <form action="destino.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        
        <label for="telefone">Telefone:</label>
        <input type="number" name="telefone" id="telefone" required>
        
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem" rows="4" required></textarea>
        
        <button type="submit">Enviar</button>
    </form>

</body>
</html>