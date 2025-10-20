<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="login-container">
        <h2>Redefinir Senha</h2>
        <form action="atualizar_senha.php" method="POST">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
            <input type="password" name="nova_senha" placeholder="Nova senha" required><br>
            <button type="submit">Atualizar Senha</button>
        </form>
    </div>
</body>
</html>
