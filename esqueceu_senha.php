<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="login-container">
        <h2>Recuperar Senha</h2>
        <form action="enviar_codigo.php" method="POST">
            <input type="text" name="identificador" placeholder="Digite seu e-mail ou telefone" required><br>
            <button type="submit">Enviar código</button>
        </form>
        <p><a href="login.php">Voltar ao login</a></p>
    </div>
</body>
</html>
