<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário</title>
</head>
<body>
    <div class="container">
        <h2>Formulário de Contato</h2>
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
        
        <h2>Envio via GET</h2>
        <a href="destino.php?nome=Teste&telefone=123456789&email=teste@email.com&mensagem=Olá">Enviar via GET</a>
    </div>
</body>
</html>
</html>