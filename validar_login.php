<?php
ob_start();
session_start();

require_once 'conexao/conexao.php';

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    //Veriricar se o usuario existe.

    $sql = "SELECT * FROM usuarios WHERE usuario = ? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$usuario]);

    if($stmt->rowCount() > 0){
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        //Verificar senha

        if(password_verify($senha, $user['senha'])){

            //Login correto, inicia sessão
            $_SESSION['usuario'] = $user ['usuario'];
            $_SESSION['email'] = $user ['email'];
            $_SESSION['nivel'] = $user['nivel']; // <-- novo

            //Redirecionar para pagina protegida 

        header("Location: /sitecadastro/painel.php");
         exit;
        } else {
            echo "Senha incorreta! <a href='login.php'> Voltar </a>";
            exit; 
        }
    } else {
          echo "Usuário não encontrado! <button><a href='login.php'>Voltar</a></button>" ;
          exit;         
       }
    }  else  {
         header("location: login.php");
         exit;
            
}



?>