<?php
// require_once 'protecao_admin.php'; 

session_start();
session_destroy();
header("location: login.php");
exit;


?>