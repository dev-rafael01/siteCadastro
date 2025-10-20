<?php

require_once 'env.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME;charset=$CHARSET";


try{
    $pdo = new PDO($dsn, $ENV_USERNAME , $ENV_PASSWORD );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo 'CONEXÃO BEM SUCEDIDA..';
}catch (PDOException $e){
    echo 'ERRO DE CONEXAO. ' . $e->getMessage();
    exit;
}





?>