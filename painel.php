<?php

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
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Email: <?php echo $_SESSION['email']; ?></p>
    <a href="logout.php">Sair</a>
    
</body>
</html>