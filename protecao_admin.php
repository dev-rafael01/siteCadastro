<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] !== 'admin') {
    header("Location: login.php");
    exit;
}
?>
