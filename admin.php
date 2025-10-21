<?php
session_start();

// Verifica se está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

// Verifica se é administrador
if ($_SESSION['nivel'] !== 'admin') {
    echo "<p style='color:red;text-align:center;'>Acesso negado! Somente administradores podem acessar esta página.</p>";
    echo "<p style='text-align:center;'><a href='painel.php'>Voltar ao painel</a></p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Área Administrativa</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="painel-container">
        <h1>Painel Administrativo</h1>
        <p>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?> (Administrador)</p>

        <hr>
        <ul>
            <li><a href="usuarios.php">Gerenciar Usuários</a></li>
            <li><a href="relatorios.php">Relatórios</a></li>
            <li><a href="configuracoes.php">Configurações do Sistema</a></li>
        </ul>

        <a href="painel.php">Voltar ao painel do usuário</a> |
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
