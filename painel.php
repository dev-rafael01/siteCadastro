<?php
require_once 'conexao/conexao.php';

session_start();

//Se não estiver logado, redireciona para login

if(!isset($_SESSION['usuario'])){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel do Usuário</title>
    <link rel="stylesheet" href="css/adm.estilo.css">
</head>
<body>
    <?php if ($_SESSION['nivel'] === 'admin'): ?>
    <p><a href="admin.php">Acessar área administrativa</a></p>
    <?php endif; ?>

    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
    <br>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <a href="logout.php">Sair</a>
    
</body>
</html>