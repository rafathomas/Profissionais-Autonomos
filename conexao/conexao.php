<?php

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "tcc";

global $pdo;

try {

    $pdo = new PDO("mysql:host=localhost;dbname=tcc", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
    exit;
}
?>