<?php
require_once 'conexao/conexao.php';

$email = $_POST['email'];
$codigo = $_POST['codigo'];

$sql = "SELECT * FROM usuarios 
        WHERE email = :email 
        AND codigo_recuperacao = :codigo 
        AND validade_codigo > NOW()";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':codigo', $codigo);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    header("Location: redefinir_senha.php?email=" . urlencode($email));
    exit;
} else {
    echo "<p style='color:red;text-align:center;'>Código inválido ou expirado.</p>";
}
?>
