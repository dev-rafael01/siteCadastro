<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="login-container">

        <?php
        if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'sucesso') {
        echo "<p style='color: green; text-align:center;'>Cadastro realizado com sucesso!</p>";
        }
        ?>
        
        <h2>Login do Sistema</h2>
        <form action="valida_login.php" method="POST">
            <input type="text" name="usuario" placeholder="Usuário" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <button type="submit">Entrar</button>
        </form>

        <div class="links">
            <p><a href="cadastro.php">Cadastrar-se</a></p>
            <p><a href="esqueceu_senha.php">Esqueceu a senha?</a></p>
        </div>
    </div>
</body>
</html>
