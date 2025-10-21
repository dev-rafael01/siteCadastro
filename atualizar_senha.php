<?php
 require_once 'protecao_admin.php'; 
 require_once 'conexao/conexao.php';

$email = $_POST['email'];
$nova_senha = password_hash($_POST['nova_senha'], PASSWORD_DEFAULT);

$sql = "UPDATE usuarios 
        SET senha = :senha, codigo_recuperacao = NULL, validade_codigo = NULL 
        WHERE email = :email";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':senha', $nova_senha);
$stmt->bindValue(':email', $email);
$stmt->execute();

echo "<p style='color:green;text-align:center;'>Senha atualizada com sucesso!</p>";
echo "<p style='text-align:center;'><a href='login.php'>Voltar ao login</a></p>";
?>
