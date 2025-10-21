<?php
require_once 'protecao_admin.php'; 
require_once 'conexao/conexao.php';

$identificador = $_POST['identificador'];
$codigo = rand(100000, 999999);
$validade = date('Y-m-d H:i:s', strtotime('+10 minutes'));

$sql = "SELECT * FROM usuarios WHERE email = :id OR telefone = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $identificador);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql = "UPDATE usuarios 
            SET codigo_recuperacao = :codigo, validade_codigo = :validade 
            WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':codigo', $codigo);
    $stmt->bindValue(':validade', $validade);
    $stmt->bindValue(':id', $usuario['id']);
    $stmt->execute();

    // Aqui você pode usar mail() para enviar o código.
    // mail($usuario['email'], "Código de Recuperação", "Seu código é: $codigo");

    header("Location: verificar_codigo.php?email=" . urlencode($usuario['email']));
    exit;
} else {
    echo "<p style='color:red;text-align:center;'>Usuário não encontrado.</p>";
}
?>
