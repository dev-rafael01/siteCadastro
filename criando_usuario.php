<?php
require_once 'protecao_admin.php'; 
require_once 'conexao/conexao.php';


//inserindo usuario ao banco

$sql = "INSERT INTO usuarios (email, usuario, senha, telefone, nivel) VALUES (:email, :usuario, :senha, :telefone, :user)";

$stmt= $pdo->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':telefone', $telefone);
$stmt->bindParam(':nivel', $user);
$queryExecute = $stmt->execute();

if ($queryExecute) {
    //  Redireciona para o login com mensagem de sucesso
    header("Location: login.php?cadastro=sucesso");
    exit;
} else {
    echo "Erro ao cadastrar! <a href='cadastro.php'>Tente novamente</a>";
    exit;
}


?>