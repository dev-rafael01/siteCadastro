<?php

require_once 'conexao/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $telefone = $_POST['telefone'];


    //Verifica se o usuario ja exisite

    $sql = ('SELECT * FROM usuarios WHERE usuario = ?');

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$usuario]);

    if ($stmt->rowCount() > 0){
    echo "Usuario ja existe! <a href='cadastro.php'>Voltar</a>";
    exit;

}

include 'criando_usuario.php';


}




?>