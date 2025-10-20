<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Código</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="login-container">
        <h2>Verificação</h2>
        <form action="valida_codigo.php" method="POST">
            <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">
            <input type="text" name="codigo" placeholder="Digite o código recebido" required><br>
            <button type="submit">Verificar</button>
        </form>
    </div>
</body>
</html>
